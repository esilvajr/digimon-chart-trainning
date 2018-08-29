<?php

namespace Digimon\Chart\DigiWorld\Evolutions;

use Digimon\Chart\DigiWorld\Digimons\Champions\Garurumon;
use Digimon\Chart\DigiWorld\Digimons\Megas\WereGarurumon;
use Digimon\Chart\Entities\DigiEvolution;

class GarurumonToWereGarurumonEvolution implements Evolution
{
    public function digiEvolution(): DigiEvolution
    {
        $digiEvolution = new DigiEvolution();
        $digiEvolution->digiEvolveFrom(new Garurumon());
        $digiEvolution->digiEvolveTo(new WereGarurumon());
        return $digiEvolution;
    }
}
