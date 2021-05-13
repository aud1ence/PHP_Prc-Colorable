<?php

namespace Src;

class Square extends Rectangle implements Colorable
{
    public float $width;

    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
        $this->width = $width;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->width;
    }

    public function howToColor(): string
    {
        return "Color all four sides";
    }
}