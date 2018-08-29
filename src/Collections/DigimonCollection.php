<?php

namespace Digimon\Chart\Collections;

use Digimon\Chart\Entities\Digimon;

class DigimonCollection
{
    private $collector;

    public function add(Digimon $digimon): void
    {
        $this->collector[] = $digimon;
    }

    public function all()
    {
        return $this->collector;
    }
}
