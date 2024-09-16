<?php

namespace AnimalFactory\cage;

use AnimalFactory\animal\Bird;

class BirdCage extends Enclosure
{
    protected array $bird = [];

    public function __construct(string $kingdom = 'Птицы')
    {
        parent::__construct($kingdom);
        $this->bird[$this->kingdom] = [];
    }

    public function setBird(Bird $bird): void
    {
        $this->bird[$this->kingdom] = array_merge(
            $this->bird[$this->kingdom],
            $bird->getParamAnimal()
        );
    }

    public function getBird(): array
    {
        return $this->bird;
    }

}
