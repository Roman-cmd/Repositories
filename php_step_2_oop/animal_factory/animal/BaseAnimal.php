<?php
declare(strict_types = 1);
namespace AnimalFactory\animal;

use AnimalFactory\cage\Enclosure;

abstract class BaseAnimal
{
    protected string $kingdom;
    protected int $legs;
    protected int $fairy;
    protected int $wings;
    function __construct(string $kingdom)
    {
        $this->kingdom = $kingdom;
    }
}
