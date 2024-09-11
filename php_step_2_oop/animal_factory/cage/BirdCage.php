<?php

namespace AnimalFactory\cage;
use AnimalFactory\animal\Bird;
require_once('../../../vendor/autoload.php');

class BirdCage extends Enclosure
{


    public function __construct(string $kingdom = 'Птицы')
    {
        parent::__construct($kingdom);
        $this->bird[$this->kingdom] = [];
    }

    public function setBird(Bird $bird): void
    {
        $this->bird[$this->kingdom] = array_merge(
            $this->bird[$this->kingdom],
            $bird->getAnimal()
        );
    }

    public function getBird(): array
    {
        return $this->bird;
    }

}
