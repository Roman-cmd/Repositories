<?php

namespace AnimalFactory\animal;

class Bird extends BaseAnimal
{
    public function __construct(int $legs, int $tails, int $wings)
    {
        parent::__construct('Птицы', $legs, $tails, $wings);
    }
}