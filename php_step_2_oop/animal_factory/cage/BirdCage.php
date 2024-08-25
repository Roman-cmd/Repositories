<?php

namespace AnimalFactory\cage;

use AnimalFactory\BaseAnimal;

class BirdCage extends BaseAnimal
{
    public function __construct($legs, $tails, $wings)
    {
        parent::__construct('Bird', $legs, $tails, $wings);
    }
}