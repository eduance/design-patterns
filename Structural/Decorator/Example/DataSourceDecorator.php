<?php

namespace Eduance\Structural\Decorator\Example;

class DataSourceDecorator implements DataSource
{
    protected DataSource $wrappee;

    public function __construct($source)
    {
        $this->wrappee = $source;
    }

    public function writeData($data)
    {
        $this->wrappee->writeData($data);
    }

    public function readData()
    {
        return $this->wrappee->readData();
    }
}