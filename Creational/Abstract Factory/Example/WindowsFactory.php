<?php

use Eduance\AbstractFactory\Windows\Button;
use Eduance\AbstractFactory\Windows\Checkbox;
use JetBrains\PhpStorm\Pure;

class WindowsFactory implements GUIFactory
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