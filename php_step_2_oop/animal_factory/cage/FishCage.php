<?php

namespace AnimalFactory\cage;

use AnimalFactory\animal\Fish;

class FishCage extends Enclosure
{
    protected array $fish = [];

    public function __construct(string $kingdom = 'Рыбы')
    {
        parent::__construct($kingdom);
        $this->fish[$this->kingdom] = [];
    }

    public function setFish(Fish $fish): void
    {
        $this->fish[$this->kingdom] = array_merge(
            $this->fish[$this->kingdom],
            $fish->getParamAnimal()
        );
    }

    public function getFish(): array
    {
        return $this->fish;
    }
}
