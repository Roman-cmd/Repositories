<?php

namespace AnimalFactory\animal;

abstract class BaseAnimal
{
    public array $data = [];

    /**
     * @param string $name
     * @param int $legs
     * @param int $fairy
     * @param int $wings
     * @return void
     */
    public function setParamAnimal(string $name, int $legs = 0, int $fairy = 0, int $wings = 0): void
    {
        $this->data = [
            $name => [
                'Ног' => $legs,
                'Хвостов' => $fairy,
                'Крыльев' => $wings
            ]
        ];
    }

    public function getParamAnimal(): array
    {
        return $this->data;
    }

}
