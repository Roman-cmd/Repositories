<?php

namespace AnimalFactory\animal;
require_once "../../../vendor/autoload.php";

class Fish extends BaseAnimal
{
    public function setAnimal(string $name, int $fairy) : void
    {
        $this->data = [
            $name => ['Хвостов' => $fairy]
        ];
    }
}