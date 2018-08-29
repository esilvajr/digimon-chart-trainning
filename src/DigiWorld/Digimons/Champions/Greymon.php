<?php

namespace Digimon\Chart\DigiWorld\Digimons\Champions;

use Digimon\Chart\Entities\Digimon;

class Greymon extends Digimon
{
    public function __construct()
    {
        $this->setId(2);
        $this->setName('Greymon');
        $this->setLevel('Champion');
        $this->setType('Fire');
        $this->setDesc('Grrrrr');
    }
}
