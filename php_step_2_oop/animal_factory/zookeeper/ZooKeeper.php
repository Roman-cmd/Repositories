<?php
namespace AnimalFactory\zookeeper;
use AnimalFactory\animal\BaseAnimal;
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
    }

    public function addAnimal(BaseAnimal $animal, string $key): void
    {
        switch ($key) {
            case 'Звери':
                $this->beast->setBeast($animal);
                break;
            case 'Рыбы':
                $this->fish->setFish($animal);
                break;
            case 'Птицы':
                $this->beast->setBeast($animal);
                break;
            default:
                echo "Указанной клетки нет!!!";
                break;
        }
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
$cat = new Beast();
$dog = new Beast();
$cat->setParamAnimal('Cat',4,1);
$dog->setParamAnimal('Бобик', 4, 1);
$fish = new Fish();
$fish->setParamAnimal('Селедка', 1);
$parampant->addAnimal($cat,'Звери');
$parampant->addAnimal($dog,'Звери');
$parampant->addAnimal($fish, 'Рыбы');
print_r($parampant->getFactory());