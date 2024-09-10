<?php

namespace AnimalFactory\animal;

trait AnimalTrait
{
    public array $data = [];
    public function getAnimal(): array
    {
        return $this->data;
    }
}