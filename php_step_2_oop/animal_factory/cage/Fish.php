<?php

namespace AnimalFactory\cage;

use AnimalFactory\BaseAnimal;

class Fish extends BaseAnimal
{
    public function __construct(int $legs, int $tails, int $wings)
    {
        parent::__construct('Рыбы', $legs, $tails, $wings);
    }

}