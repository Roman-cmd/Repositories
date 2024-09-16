<?php

namespace AnimalFactory\zookeeper;

use AnimalFactory\animal\BaseAnimal;
use AnimalFactory\animal\Beast;
use AnimalFactory\animal\Bird;
use AnimalFactory\animal\Fish;
use AnimalFactory\cage\BirdCage;
use AnimalFactory\cage\BeastCage;
use AnimalFactory\cage\FishCage;

class ZooKeeper
{
    public array $factory = [];
    public $beast;
    public $fish;
    public $bird;

    public function __construct()
    {
        $this->factory['Фабрика'] = [];
        $this->beast = new BeastCage();
        $this->beast->setBeast(new Beast());
        $this->fish = new FishCage();
        $this->fish->setFish(new Fish());
        $this->bird = new BirdCage();
        $this->bird->setBird(new Bird());
    }

    /**
     * @param BaseAnimal $fauna
     * @param string $key
     * @return void
     */
    public function addAnimal(BaseAnimal $fauna, string $key): void
    {
        switch ($key) {
            case 'Звери':
                $this->beast->setBeast($fauna);
                break;
            case 'Рыбы':
                $this->fish->setFish($fauna);
                break;
            case 'Птицы':
                $this->bird->setBird($fauna);
                break;
            default:
                echo "Указанной клетки нет!!!";
                break;
        }
        $this->factory['Фабрика'] = array_merge(
            $this->factory['Фабрика'],
            $this->beast->getBeast(),
            $this->fish->getFish(),
            $this->bird->getBird());
    }

    /**
     * @param string $kingdom
     * @return array|null
     */
    public function searchAnimalKingdom(string $kingdom): ?array
    {
        foreach ($this->factory as $animal) {
            foreach ($animal as $key => $value) {
                if ($kingdom === $key) {
                    return $value;
                } elseif (empty($value)) {
                    echo 'Царства не найдено';
                }
            }
        }
        return null;
    }

    public function searchAnimalParameters(?string $animalName = null, ?int $legs = null, ?int $fairy = null, ?int $wings = null): ?array
    {
        $foundAnimals = [];
        foreach ($this->factory as $kingdom) {
            foreach ($kingdom as $name => $data) {
                foreach ($data as $key => $value) {
                    if (
                        ($animalName === null || $animalName === $key) &&
                        ($legs === null || $legs === $data['Ног']) &&
                        ($fairy === null || $fairy === $data['Хвостов']) &&
                        ($wings === null || $wings === $data['Крыльев'])
                    ) {
                        $foundAnimals[$key] = $value;
                    }
                }
            }
        }
        if (!empty($foundAnimals)) {
            return $foundAnimals;
        } else {
            echo 'Ни одно животное не найдено';
            return null;
        }
    }


    public function getFactory(): array
    {
        return $this->factory;
    }
}
