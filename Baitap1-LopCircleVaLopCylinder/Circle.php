<?php

class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function area()
    {
        return ($this->radius * $this->radius * pi());
    }

    public function perimeter()
    {
        return ($this->radius * 2 * pi());
    }

    public function toString()
    {
        return 'Radius: ' . $this->radius . ', Color: ' . $this->color;
    }

}