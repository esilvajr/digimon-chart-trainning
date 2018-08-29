<?php

namespace ORM\Atlas\Repositories;

use Digimon\Chart\Entities\Digimon;

class DigimonRepository implements \Digimon\Chart\Repositories\DigimonRepository
{

    private $connection;
    private $queryFactory;

    public function __construct()
    {
        $this->queryFactory = new \Atlas\Query\QueryFactory();
        $this->connection = \Atlas\Pdo\Connection::new('mysql:host=mysql;dbname=digimon_chart', 'root', 'q1w2e3');
    }

    public function isDigimon(string $name): bool
    {
        $select = $this->queryFactory->newSelect($this->connection);
        $result = $select
            ->columns('*')
            ->from('digimons')
            ->where('name =', $name)
            ->fetchAll();

        if( is_array($result) && empty($result)) {
            return false;
        }
        return true;
    }

    public function newDigimon(Digimon $digimon): bool
    {
        try {
            $insert = $this->queryFactory->newInsert($this->connection);
            $insert
                ->into('digimons')
                ->column('id', $digimon->getId())
                ->column('name', $digimon->getName())
                ->column('level', $digimon->getLevel())
                ->column('type', $digimon->getType())
                ->column('desc', $digimon->getDesc());

            $insert->perform();

            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function whoDigimon(string $name): Digimon
    {
        $select = $this->queryFactory->newSelect($this->connection);
        $result = $select
            ->columns('*')
            ->from('digimons')
            ->where('name =', $name)
            ->fetchOne();

        $digimon = new Digimon();
        $digimon($result['id'], $result['name'], $result['level'], $result['type'], $result['desc']);

        return $digimon;
    }
}
