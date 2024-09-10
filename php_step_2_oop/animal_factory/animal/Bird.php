<?php

namespace AnimalFactory\animal;

class Bird
{
    protected array $data = [];
    public function setAnimal(string $name, int $legs, int $fairy, int $wings) : void
    {
        $this->data = [
            $name => ['Ног' => $legs,
                      'Хвостов' => $fairy,
                      'Крыльев' => $wings]
        ];
    }


}