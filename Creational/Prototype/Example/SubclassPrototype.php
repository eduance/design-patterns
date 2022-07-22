<?php

class SubclassPrototype implements Prototype
{
    protected $field2;

    public function __construct($prototype)
    {
        $this->field2 = $prototype->field2;
    }

    public function clone(): Prototype
    {
        return new SubclassPrototype($this);
    }
}