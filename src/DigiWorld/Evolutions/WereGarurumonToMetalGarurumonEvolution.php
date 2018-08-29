<?php

namespace Digimon\Chart\DigiWorld\Evolutions;

use Digimon\Chart\DigiWorld\Digimons\Megas\WereGarurumon;
use Digimon\Chart\DigiWorld\Digimons\Ultimates\MetalGarurumon;
use Digimon\Chart\Entities\DigiEvolution;

class WereGarurumonToMetalGarurumonEvolution implements Evolution
{
    public function digiEvolution(): DigiEvolution
    {
        $digiEvolution = new DigiEvolution();
        $digiEvolution->digiEvolveFrom(new WereGarurumon());
        $digiEvolution->digiEvolveTo(new MetalGarurumon());
        return $digiEvolution;
    }
}
