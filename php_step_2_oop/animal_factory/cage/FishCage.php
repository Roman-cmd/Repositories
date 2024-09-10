<?php

namespace AnimalFactory\cage;

use AnimalFactory\animal\Fish;

class FishCage extends Enclosure
{
    public array $beasts = [];

    public function __construct(string $kingdom = 'Рыбы')
    {
        parent::__construct($kingdom);
        $this->beasts[$this->kingdom] = [];
    }

    public function setBeast(Fish $beast): void
    {
        // Извлекаем данные из массива, возвращаемого getAnimal()
        $this->beasts[$this->kingdom] = array_merge(
            $this->beasts[$this->kingdom],
            $beast->getAnimal()
        );
    }

    public function getBeasts(): array
    {
        return $this->beasts;
    }

}