<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area() : float
    {   
        // area of circle = (Pi) times the Radius squared
        return pi() * $this->radius * $this->radius;
    }
}