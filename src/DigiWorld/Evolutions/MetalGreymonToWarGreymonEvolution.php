<?php

namespace Digimon\Chart\DigiWorld\Evolutions;

use Digimon\Chart\DigiWorld\Digimons\Megas\MetalGreymon;
use Digimon\Chart\DigiWorld\Digimons\Ultimates\WarGreymon;
use Digimon\Chart\Entities\DigiEvolution;

class MetalGreymonToWarGreymonEvolution implements Evolution
{
    public function digiEvolution(): DigiEvolution
    {
        $digiEvolution = new DigiEvolution();
        $digiEvolution->digiEvolveFrom(new MetalGreymon());
        $digiEvolution->digiEvolveTo(new WarGreymon());
        return $digiEvolution;
    }
}
