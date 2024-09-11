<?php

namespace AnimalFactory\animal;


abstract class BaseAnimal
{
    public array $data = [];
    public function getAnimal(): array
    {
        return $this->data;
    }

}
