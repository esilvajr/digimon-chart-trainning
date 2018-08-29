<?php

namespace ORM\Eloquent\Repositories;

use Digimon\Chart\DigiWorld\Evolutions\Evolution;
use Digimon\Chart\Exceptions\EvolutionMatchFoundException;

class DigiEvolutionRepository implements \Digimon\Chart\Repositories\DigiEvolutionRepository
{

    public function evolute(Evolution $evolution): bool
    {
        try {
            $result = \ORM\Eloquent\Entities\DigiEvolution::where('from_digimon_id', $evolution->digiEvolution()->getActual()->getId())
                ->where('to_digimon_id', $evolution->digiEvolution()->getEvolution()->getId())
                ->first();

            if (!is_null($result)) {
                throw new EvolutionMatchFoundException();
            }

            $model = new \ORM\Eloquent\Entities\DigiEvolution();
            $model->from_digimon_id =  $evolution->digiEvolution()->getActual()->getId();
            $model->to_digimon_id = $evolution->digiEvolution()->getEvolution()->getId();

            if ($model->save()) {
                return true;
            }
            return false;
        } catch (\Exception $exception) {
            return false;
        }
    }
}
