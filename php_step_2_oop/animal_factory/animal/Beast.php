<?php

namespace AnimalFactory\animal;
require_once "../../../vendor/autoload.php";

class Beast extends BaseAnimal
{
    /**
     * @param string $name
     * @param int $legs
     * @param int $fairy
     * @return void
     */
    public function setParamAnimal(string $name, int $legs, int $fairy) : void
    {
        $this->data = [
            $name => [
                'Ног' => $legs,
                'Хвостов' => $fairy,
                ]
        ];
    }
}

