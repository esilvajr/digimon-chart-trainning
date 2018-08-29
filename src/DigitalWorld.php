<?php

namespace Digimon\Chart;

use Digimon\Chart\Collections\DigimonCollection;
use Digimon\Chart\Entities\Digimon;
use Digimon\Chart\Exceptions\CantEvoluteException;
use Digimon\Chart\Exceptions\DeadOnBornException;
use Digimon\Chart\Exceptions\EvolutionFailureException;
use Digimon\Chart\Exceptions\EvolutionMatchFoundException;
use Digimon\Chart\Exceptions\UnknownDigitalMonsterException;
use Digimon\Chart\Repositories\DigiEvolutionRepository;
use Digimon\Chart\Repositories\DigimonRepository;
use Digimon\Chart\DigiWorld\Evolutions\Evolution;

class DigitalWorld
{

    private $digimonRepository;
    private $digiEvolutionRepository;

    public  function __construct(DigimonRepository $digimonRepository, DigiEvolutionRepository $digiEvolutionRepository)
    {
        $this->digimonRepository = $digimonRepository;
        $this->digiEvolutionRepository = $digiEvolutionRepository;
    }

    public function born(Digimon $digimon): void
    {
        try {
            if (!$this->digimonRepository->isDigimon($digimon->getName())) {
                $this->digimonRepository->newDigimon($digimon);
                print_r("A new digimon was born: " . $digimon->getName(). PHP_EOL) ;
            }

        } catch (\Exception $exception) {
            throw new DeadOnBornException("[DeadOnBornException]");
        }
    }

    public function evolution(Evolution $evolution): void
    {

        try {
            if (!$this->digiEvolutionRepository->evolute($evolution)) {
                throw new EvolutionFailureException('[EvolutionFailureException]');
            }
            print_r(
                sprintf(
                    "The digimon %s digievolute on %s.",
                    $evolution->digiEvolution()->getActual()->getName(),
                    $evolution->digiEvolution()->getEvolution()->getName()
                ) . PHP_EOL
            );
        } catch (EvolutionMatchFoundException $exception) {
            return;
        } catch (\Exception $exception) {
            throw new EvolutionFailureException('[EvolutionFailureException]');
        }
    }

    public function whosThatDigimon(string $name): Digimon
    {
        if (!$this->digimonRepository->isDigimon($name)) {
            throw new UnknownDigitalMonsterException("[UnknownDigitalMonsterException] Unknown digital monster {$name}");
        }

        return $this->digimonRepository->whoDigimon($name);
    }


}
