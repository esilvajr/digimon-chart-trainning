<?php

namespace Digimon\Chart\DigiWorld\Digimons\Ultimates;

use Digimon\Chart\Entities\Digimon;

class MetalGarurumon extends Digimon
{
    public function __construct()
    {
        $this->setId(8);
        $this->setName('MetalGarurumon');
        $this->setLevel('Ultimate');
        $this->setType('Fire');
        $this->setDesc('With my partners.');
    }
}
