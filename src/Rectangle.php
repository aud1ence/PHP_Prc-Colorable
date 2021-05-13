<?php

namespace Src;

class Rectangle extends Shape implements Colorable
{
    public float $width;
    public float $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }

    public function howToColor(): string
    {
        return "This is child of Shape";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}