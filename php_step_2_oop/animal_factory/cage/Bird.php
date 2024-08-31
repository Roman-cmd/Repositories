<?php

namespace AnimalFactory\cage;

use AnimalFactory\BaseAnimal;

class Bird extends BaseAnimal
{
    public function __construct(int $legs, int $tails, int $wings)
    {
        parent::__construct('Bird', $legs, $tails, $wings);
    }
}