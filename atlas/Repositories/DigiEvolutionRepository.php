<?php

namespace ORM\Atlas\Repositories;

use Digimon\Chart\DigiWorld\Evolutions\Evolution;
use Digimon\Chart\Exceptions\EvolutionMatchFoundException;

class DigiEvolutionRepository implements \Digimon\Chart\Repositories\DigiEvolutionRepository
{

    private $connection;
    private $queryFactory;

    public function __construct()
    {
        $this->queryFactory = new \Atlas\Query\QueryFactory();
        $this->connection = \Atlas\Pdo\Connection::new('mysql:host=mysql;dbname=digimon_chart', 'root', 'q1w2e3');
    }

    public function evolute(Evolution $evolution): bool
    {
        try {

            $select = $this->queryFactory->newSelect($this->connection);
            $result = $select
                ->columns('*')
                ->from('digievolutions')
                ->where('from_digimon_id =', $evolution->digiEvolution()->getActual()->getId())
                ->where('to_digimon_id =', $evolution->digiEvolution()->getEvolution()->getId())
                ->fetchOne();

            if (!is_null($result) || !empty($result)) {
                throw new EvolutionMatchFoundException();
            }

            $insert = $this->queryFactory->newInsert($this->connection);
            $insert
                ->into('digievolutions')
                ->column('from_digimon_id', $evolution->digiEvolution()->getActual()->getId())
                ->column('to_digimon_id', $evolution->digiEvolution()->getEvolution()->getId());

            $insert->perform();

            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }
}
