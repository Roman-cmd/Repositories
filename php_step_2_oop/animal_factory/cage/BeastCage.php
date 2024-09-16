<?php

namespace AnimalFactory\cage;

use AnimalFactory\animal\Beast;

class BeastCage extends Enclosure
{
    protected array $beasts = [];

    public function __construct(string $kingdom = 'Звери')
    {
        parent::__construct($kingdom);
        $this->beasts[$this->kingdom] = [];
    }

    public function setBeast(Beast $beast): void
    {
        $this->beasts[$this->kingdom] = array_merge(
            $this->beasts[$this->kingdom],
            $beast->getParamAnimal()
        );
    }

    public function getBeast(): array
    {
        return $this->beasts;
    }
}
