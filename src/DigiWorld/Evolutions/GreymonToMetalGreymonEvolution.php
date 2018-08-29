<?php

namespace Digimon\Chart\DigiWorld\Evolutions;

use Digimon\Chart\DigiWorld\Digimons\Champions\Greymon;
use Digimon\Chart\DigiWorld\Digimons\Megas\MetalGreymon;
use Digimon\Chart\Entities\DigiEvolution;

class GreymonToMetalGreymonEvolution implements Evolution
{
    public function digiEvolution(): DigiEvolution
    {
        $digiEvolution = new DigiEvolution();
        $digiEvolution->digiEvolveFrom(new Greymon());
        $digiEvolution->digiEvolveTo(new MetalGreymon());
        return $digiEvolution;
    }
}
