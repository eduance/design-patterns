<?php

namespace Eduance\Structural\Decorator\Example;

interface DataSource
{
    public function writeData($data);
    public function readData();
}