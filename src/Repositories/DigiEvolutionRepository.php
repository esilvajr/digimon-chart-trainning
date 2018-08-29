<?php

namespace Digimon\Chart\Repositories;

use Digimon\Chart\DigiWorld\Evolutions\Evolution;

interface DigiEvolutionRepository
{
    public function evolute(Evolution $evolution): bool;
}
