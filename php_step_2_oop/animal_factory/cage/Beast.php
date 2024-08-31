<?php

namespace AnimalFactory\cage;

use AnimalFactory\BaseAnimal;


class Beast extends BaseAnimal
{

    public function __construct(int $legs, int $tails, int $wings)
    {
        parent::__construct('Beast', $legs, $tails, $wings);
    }


}