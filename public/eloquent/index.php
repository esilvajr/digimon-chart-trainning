<?php

require_once("../../vendor/autoload.php");
require_once("../../eloquent/vendor/autoload.php");


try {
    $eloquent = new \ORM\Eloquent\Eloquent();

    $digitalWorld = new \Digimon\Chart\DigitalWorld(new \ORM\Eloquent\Repositories\DigimonRepository(), new \ORM\Eloquent\Repositories\DigiEvolutionRepository());

    //O Nascimento.
    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Rookies\Agumon());
    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Champions\Greymon());
    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Megas\MetalGreymon());
    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Ultimates\WarGreymon());

    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Rookies\Gabumon());
    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Champions\Garurumon());
    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Megas\WereGarurumon());
    $digitalWorld->born(new \Digimon\Chart\DigiWorld\Digimons\Ultimates\MetalGarurumon());

    //As evoluções.
    $digitalWorld->evolution(new \Digimon\Chart\DigiWorld\Evolutions\AgumonToGreymonEvolution());
    $digitalWorld->evolution(new \Digimon\Chart\DigiWorld\Evolutions\GreymonToMetalGreymonEvolution());
    $digitalWorld->evolution(new \Digimon\Chart\DigiWorld\Evolutions\MetalGreymonToWarGreymonEvolution());
    $digitalWorld->evolution(new \Digimon\Chart\DigiWorld\Evolutions\GabumonToGarurumonEvolution());
    $digitalWorld->evolution(new \Digimon\Chart\DigiWorld\Evolutions\GarurumonToWereGarurumonEvolution());
    $digitalWorld->evolution(new \Digimon\Chart\DigiWorld\Evolutions\WereGarurumonToMetalGarurumonEvolution());

} catch (\Digimon\Chart\Exceptions\UnknownDigitalMonsterException $exception) {
    die($exception->getMessage());
} catch (\Exception $exception) {
    die($exception->getMessage());
}
