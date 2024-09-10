<?php

namespace AnimalFactory\animal;

class Fish
{
    protected array $data = [];
    public function setAnimal(string $name, int $fairy) : void
    {
        $this->data = [
            $name => ['Хвостов' => $fairy]
        ];
    }



}