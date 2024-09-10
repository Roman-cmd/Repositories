<?php

namespace AnimalFactory\animal;


class Beast
{
    public array $data = [];

    public function setAnimal(string $name, int $legs, int $fairy) : void
    {
        $this->data = [
            $name => ['Ног' => $legs,
                      'Хвостов' => $fairy]
        ];
    }

    public function getAnimal(): array
    {
        return $this->data;
    }
}
