<?php

namespace AnimalFactory\cage;

class FishCage extends Enclosure
{
    public function setFish(array $fish): void
    {
        $this->fish = $fish;
    }

}