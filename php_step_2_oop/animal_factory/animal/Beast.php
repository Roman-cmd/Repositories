<?php

namespace AnimalFactory\animal;
require_once "../../../vendor/autoload.php";

class Beast extends BaseAnimal
{
    public function setAnimal(string $name, int $legs, int $fairy) : void
    {
        $this->data = [
            $name => ['Ног' => $legs,
                      'Хвостов' => $fairy]
        ];
    }
}
