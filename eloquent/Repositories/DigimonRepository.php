<?php

namespace ORM\Eloquent\Repositories;

use Digimon\Chart\Entities\Digimon;

class DigimonRepository implements \Digimon\Chart\Repositories\DigimonRepository
{

    public function isDigimon(string $name): bool
    {
        $result = \ORM\Eloquent\Entities\Digimon::where('name', $name)
            ->first();

        if( is_null($result)) {
            return false;
        }
        return true;
    }

    public function newDigimon(Digimon $digimon): bool
    {
        try {
            $model = new \ORM\Eloquent\Entities\Digimon();
            $model->id = $digimon->getId();
            $model->name = $digimon->getName();
            $model->level = $digimon->getLevel();
            $model->type = $digimon->getType();
            $model->desc = $digimon->getDesc();

            if ($model->save()) {
                return true;
            }
            return false;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function whoDigimon(string $name): Digimon
    {
        $result = \ORM\Eloquent\Entities\Digimon::where('name', $name)
            ->first();

        $result = $result->toArray();

        $digimon = new Digimon();
        $digimon($result['id'], $result['name'], $result['level'], $result['type'], $result['desc']);

        return $digimon;
    }
}
