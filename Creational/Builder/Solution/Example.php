<?php

$builder = new ConcreteBuilderA();

$director = new Director($builder);
$director->make('car');

$builder->getResult();