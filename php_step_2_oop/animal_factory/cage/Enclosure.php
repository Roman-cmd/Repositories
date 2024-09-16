<?php

namespace AnimalFactory\cage;

class Enclosure
{
    public string $kingdom;

    public function __construct(string $kingdom)
    {
        $this->kingdom = $kingdom;
    }

}