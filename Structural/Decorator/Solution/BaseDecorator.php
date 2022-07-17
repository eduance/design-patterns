<?php

use Eduance\Structural\Decorator\Solution\Component;

class BaseDecorator
{
    protected Component $wrappee;

    public function __construct($component)
    {
        $this->wrappee = $component;
    }

    public function execute()
    {
        $this->wrappee->execute();
    }
}