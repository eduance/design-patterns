<?php

class Dot implements Graphic
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        // ...
    }

    public function move($x, $y)
    {
        $this->x += $x;
        $this->y += $y;
    }

    public function draw()
    {
        // TODO: Implement draw() method.
    }
}