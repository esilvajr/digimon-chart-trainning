<?php

namespace Digimon\Chart\DigiWorld\Evolutions;

use Digimon\Chart\DigiWorld\Digimons\Champions\Garurumon;
use Digimon\Chart\DigiWorld\Digimons\Rookies\Gabumon;
use Digimon\Chart\Entities\DigiEvolution;

class GabumonToGarurumonEvolution implements Evolution
{
    public function digiEvolution(): DigiEvolution
    {
        $digiEvolution = new DigiEvolution();
        $digiEvolution->digiEvolveFrom(new Gabumon());
        $digiEvolution->digiEvolveTo(new Garurumon());
        return $digiEvolution;
    }
}
