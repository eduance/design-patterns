<?php

use Eduance\Structural\Decorator\Solution\Component;

class DecoratorWithMore extends BaseDecorator
{
    protected Component $wrappee;

    public function __construct($component)
    {
        $this->wrappee = $component;
    }

    public function execute()
    {
        parent::execute();

        $this->wrappee->execute();
    }

    public function extra()
    {
        // more cool stuff
    }
}