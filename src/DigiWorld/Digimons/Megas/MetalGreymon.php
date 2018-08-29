<?php

namespace Digimon\Chart\DigiWorld\Digimons\Megas;

use Digimon\Chart\Entities\Digimon;

class MetalGreymon extends Digimon
{
    public function __construct()
    {
        $this->setId(3);
        $this->setName('MetalGreymon');
        $this->setLevel('Mega');
        $this->setType('Fire');
        $this->setDesc('Metallll greymonn.');
    }
}
