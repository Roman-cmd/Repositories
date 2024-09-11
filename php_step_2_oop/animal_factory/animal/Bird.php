<?php

namespace AnimalFactory\animal;
require_once "../../../vendor/autoload.php";

class Bird extends BaseAnimal
{
    public function setParamAnimal(string $name, int $legs, int $fairy, int $wings) : void
    {
        $this->data = [
            $name => ['Ног' => $legs,
                      'Хвостов' => $fairy,
                      'Крыльев' => $wings]
        ];
    }
}