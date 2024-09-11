<?php
namespace AnimalFactory\zookeeper;
use AnimalFactory\animal\Beast;
use AnimalFactory\animal\Bird;
use AnimalFactory\animal\Fish;
use AnimalFactory\cage\BirdCage;
use AnimalFactory\cage\BeastCage;
use AnimalFactory\cage\FishCage;
require_once "../../../vendor/autoload.php";
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

        $this->factory['Фабрика'] = array_merge(
            $this->factory['Фабрика'],
            $this->beast->getBeasts(),
             $this->fish->getFish(),
             $this->bird->getBird());

    }

    /**
     * @return array
     */
    public function getFactory(): array
    {
        return $this->factory;
    }
}

$parampant = new ZooKeeper();
print_r($parampant->getFactory());