<?php

class ConcretePrototype implements Prototype
{
    protected $field;

    public function __construct($prototype)
    {
        $this->field = $prototype->field;
    }

    public function clone(): Prototype
    {
        return new ConcretePrototype($this);
    }
}