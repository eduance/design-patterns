<?php

$type = "encryption";

$source = new \Eduance\Structural\Decorator\Example\FileDataSource("hello.txt");

if($type === "encryption") {
    $source = new \Eduance\Structural\Decorator\Example\EncryptionDecorator($source);
    $source->writeData("hello!");
}

return $source->readData();
