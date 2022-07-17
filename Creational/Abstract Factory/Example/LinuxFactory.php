<?php

use Eduance\AbstractFactory\Linux\Button;
use Eduance\AbstractFactory\Linux\Checkbox;
use JetBrains\PhpStorm\Pure;

class LinuxFactory implements GUIFactory
{
    #[Pure] public function createButton(): Button
    {
        return new Button();
    }

    #[Pure] public function createCheckbox(): Checkbox
    {
        return new Checkbox();
    }
}