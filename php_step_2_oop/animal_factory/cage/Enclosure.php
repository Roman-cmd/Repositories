<?php

namespace AnimalFactory\cage;

class Enclosure
{
    protected string $kingdom;

    public function __construct(string $kingdom)
    {
        $this->kingdom = $kingdom;
    }

}