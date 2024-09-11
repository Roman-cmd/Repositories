<?php

namespace AnimalFactory\animal;


abstract class BaseAnimal
{
    public array $data = [];

    public function getParamAnimal(): array
    {
        return $this->data;
    }

}
