<?php
declare(strict_types = 1);
namespace AnimalFactory;

abstract class BaseAnimal
{
    protected string $kingdom;
    protected int $legs;
    protected int $tails;
    protected int $wings;

    /**
     * @param $kingdom
     * @param $legs
     * @param $tails
     * @param $wings
     */
    public function __construct(string $kingdom, int $legs, int $tails, int $wings)
    {
        $this->kingdom = $kingdom;
        $this->legs = $legs;
        $this->tails = $tails;
        $this->wings = $wings;
    }

    public function getProperties() : array
    {
        return [
            'kingdom' => $this->kingdom,
            'legs' => $this->legs,
            'tails' => $this->tails,
            'wings' => $this->wings
        ];
    }
}
