<?php

namespace AnimalFactory\cage;

class Enclosure
{
    public string $kingdom;
    protected array $beasts = [];
    protected array $bird = [];
    protected array $fish = [];

    public function __construct(string $kingdom)
    {
        $this->kingdom = $kingdom;
    }


}