<?php

namespace Digimon\Chart\DigiWorld\Digimons\Rookies;

use Digimon\Chart\Entities\Digimon;

class Gabumon extends Digimon
{
    public function __construct()
    {
        $this->setId(5);
        $this->setName('Gabumon');
        $this->setLevel('Rookie');
        $this->setType('Fire');
        $this->setDesc('A rookie fire digimon... Blue Fire.');
    }
}
