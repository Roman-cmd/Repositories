<?php

namespace AnimalFactory\cage;

class BirdCage extends Enclosure
{
    public function setBird(array $bird): void
    {
        $this->bird = $bird;
    }

}