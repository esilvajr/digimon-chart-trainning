<?php

namespace Digimon\Chart\Repositories;

use Digimon\Chart\Entities\Digimon;

interface DigimonRepository
{
    public function isDigimon(string $name): bool;
    public function newDigimon(Digimon $digimon): bool;
    public function whoDigimon(string $int): Digimon;
}
