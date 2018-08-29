<?php

namespace Digimon\Chart\DigiWorld\Digimons\Rookies;

use Digimon\Chart\Entities\Digimon;

class Agumon extends Digimon
{
    public function __construct()
    {
        $this->setId(1);
        $this->setName('Agumon');
        $this->setLevel('Rookie');
        $this->setType('Fire');
        $this->setDesc('Saying... Baby fire');
    }
}
