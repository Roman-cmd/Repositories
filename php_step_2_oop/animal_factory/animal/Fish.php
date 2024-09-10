<?php

namespace AnimalFactory\animal;

class Fish extends BaseAnimal
{
    public function __construct(int $legs, int $tails, int $wings)
    {
        parent::__construct('Рыбы', 0, $tails, 0);
    }

}