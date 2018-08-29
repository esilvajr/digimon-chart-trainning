<?php

namespace Digimon\Chart\Entities;

class Digimon
{
    private $id;
    private $name;
    private $level;
    private $type;
    private $desc;

    public function __invoke(?int $id, string $name, string $level, string $type, ?string $desc)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setLevel($level);
        $this->setType($type);
        $this->setDesc($desc);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Digimon
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Digimon
    {
        $this->name = $name;
        return $this;
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function setLevel(string $level): Digimon
    {
        $this->level = $level;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Digimon
    {
        $this->type = $type;
        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(?string $desc): Digimon
    {
        $this->desc = $desc;
        return $this;
    }
}
