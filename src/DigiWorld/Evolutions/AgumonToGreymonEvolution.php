<?php

namespace Digimon\Chart\DigiWorld\Evolutions;

use Digimon\Chart\Collections\DigimonCollection;
use Digimon\Chart\DigiWorld\Digimons\Champions\Greymon;
use Digimon\Chart\DigiWorld\Digimons\Rookies\Agumon;
use Digimon\Chart\Entities\DigiEvolution;
use Digimon\Chart\Entities\Digimon;

class AgumonToGreymonEvolution implements Evolution
{
    public function digiEvolution(): DigiEvolution
    {
        $digiEvolution = new DigiEvolution();
        $digiEvolution->digiEvolveFrom(new Agumon());
        $digiEvolution->digiEvolveTo(new Greymon());
        return $digiEvolution;
    }
}
