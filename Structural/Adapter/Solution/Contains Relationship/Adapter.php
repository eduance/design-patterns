<?php

namespace Eduance\Structural\Adapter\Solution;

class Adapter implements TargetInterface
{
    protected $contains;

    /**
     * You now don't have to follow the first interface, but can still access everything through
     * the initial class.
     *
     * @param $class
     */
    public function __construct($class)
    {
        $this->contains = $class;
    }

    public function helloWithMail()
    {
        // TODO: Implement helloWithMail() method.
    }
}