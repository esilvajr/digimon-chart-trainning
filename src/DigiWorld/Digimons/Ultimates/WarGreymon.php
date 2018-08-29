<?php

namespace Digimon\Chart\DigiWorld\Digimons\Ultimates;

use Digimon\Chart\Entities\Digimon;

class WarGreymon extends Digimon
{
    public function __construct()
    {
        $this->setId(4);
        $this->setName('WarGreymon');
        $this->setLevel('Ultimate');
        $this->setType('Fire');
        $this->setDesc('To the war.');
    }
}
