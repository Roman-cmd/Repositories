<?php
namespace AnimalFactory\manager;

use AnimalFactory\zookeeper\Zookeeper;
use AnimalFactory\animal\BaseAnimal;

class Manager
{
    private ZooKeeper $zooKeeper;

    public function __construct(ZooKeeper $zooKeeper)
    {
        $this->zooKeeper = $zooKeeper;
    }

    public function getAnimal(string $kingdom, array $features = []): ?BaseAnimal
    {
        // Если не указаны признаки, просто берем первое животное из клетки
        if (empty($features)) {
            $animals = $this->zooKeeper->factory[$kingdom];
            if (!empty($animals)) {
                return reset($animals); // Возвращаем первое животное
            }
        } else {
            // Ищем животное по признакам
            return $this->zooKeeper->findAnimalByFeatures($features, $kingdom);
        }

        return null; // Животное не найдено
    }

    public function giveAnimalToZooKeeper(BaseAnimal $animal, string $kingdom): void
    {
        $this->zooKeeper->addAnimal($animal, $kingdom);
    }
}