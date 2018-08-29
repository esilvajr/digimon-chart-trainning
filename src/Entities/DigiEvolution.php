<?php

namespace Digimon\Chart\Entities;

class DigiEvolution
{
    private $digiEvolveFrom;
    private $digiEvolveTo;

    public function digiEvolveFrom(Digimon $digimon)
    {
        $this->digiEvolveFrom = $digimon;
    }

    public function digiEvolveTo(Digimon $digimon)
    {
        $this->digiEvolveTo = $digimon;
    }

    public function getActual(): Digimon
    {
        return $this->digiEvolveFrom;
    }

    public function getEvolution(): Digimon
    {
        return $this->digiEvolveTo;
    }
}
