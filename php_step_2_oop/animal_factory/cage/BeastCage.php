<?php

namespace AnimalFactory\cage;
use AnimalFactory\animal\Beast;
require_once('../../../vendor/autoload.php');
class BeastCage extends Enclosure
{


    public function __construct(string $kingdom = 'Звери')
    {
        parent::__construct($kingdom);
        $this->beasts[$this->kingdom] = [];
    }

    public function setBeast(Beast $beast): void
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
