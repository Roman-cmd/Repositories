<?php

namespace AnimalFactory\cage;
use AnimalFactory\animal\Fish;
require_once('../../../vendor/autoload.php');

class FishCage extends Enclosure
{
    public function __construct(string $kingdom = 'Рыбы')
    {
        parent::__construct($kingdom);
        $this->fish[$this->kingdom] = [];
    }

    public function setFish(Fish $fish): void
    {
        // Извлекаем данные из массива, возвращаемого getAnimal()
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
