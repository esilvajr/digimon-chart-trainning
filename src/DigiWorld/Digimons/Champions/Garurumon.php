<?php

namespace Digimon\Chart\DigiWorld\Digimons\Champions;

use Digimon\Chart\Entities\Digimon;

class Garurumon extends Digimon
{
    public function __construct()
    {
        $this->setId(6);
        $this->setName('Garurumon');
        $this->setLevel('Champion');
        $this->setType('Fire');
        $this->setDesc('Grrrrr');
    }
}
