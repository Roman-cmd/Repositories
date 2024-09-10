<?php

namespace AnimalFactory\cage;
use AnimalFactory\animal\Beast;
require_once('../../../vendor/autoload.php');
class BeastCage extends Enclosure
{
    public array $beasts = [];

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

$beastCage = new BeastCage();

$beast1 = new Beast();
$beast1->setAnimal('Лев', 4, 1);

$beast2 = new Beast();
$beast2->setAnimal('Птица', 2, 1);

$beastCage->setBeast($beast1);
$beastCage->setBeast($beast2);

$allBeasts = $beastCage->getBeasts();

print_r($allBeasts);