<?php

namespace AnimalFactory\cage;

use AnimalFactory\BaseAnimal;


class AnimalCage extends BaseAnimal
{

    public function __construct($legs, $tails, $wings)
    {
        parent::__construct('Beast', $legs, $tails, $wings);
    }
}