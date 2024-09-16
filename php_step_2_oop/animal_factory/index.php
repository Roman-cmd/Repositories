<?php

use AnimalFactory\animal\Beast;
use AnimalFactory\animal\Bird;
use AnimalFactory\animal\Fish;

require_once('../../vendor/autoload.php');

$parampant = new AnimalFactory\zookeeper\ZooKeeper();
$cat = new Beast();
$dog = new Beast();
$bird = new Bird();
$bird->setParamAnimal('Соловей', 2, 1, 2);
$dog->setParamAnimal('Бобик', 2,1);

$parampant->addAnimal($bird, 'Птицы');
$parampant->addAnimal($dog, 'Звери');
print_r($parampant->getFactory());
