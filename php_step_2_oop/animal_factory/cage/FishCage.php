<?php

namespace AnimalFactory\cage;

use AnimalFactory\BaseAnimal;

class FishCage extends BaseAnimal
{
    public function __construct($legs, $tails, $wings)
    {
        parent::__construct('Fish', $legs, $tails, $wings);
    }

}