<?php

namespace Digimon\Chart\DigiWorld\Digimons\Megas;

use Digimon\Chart\Entities\Digimon;

class WereGarurumon extends Digimon
{
    public function __construct()
    {
        $this->setId(7);
        $this->setName('WereGarurumon');
        $this->setLevel('Mega');
        $this->setType('Fire');
        $this->setDesc('WERE Ga-ru-ru-mon.');
    }
}
