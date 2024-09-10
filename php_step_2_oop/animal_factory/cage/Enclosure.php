<?php

namespace AnimalFactory\cage;

class Enclosure
{
    protected string $kingdom;
    protected array $beasts = [];

    public function __construct(string $kingdom)
    {
        $this->kingdom = $kingdom;
    }

}