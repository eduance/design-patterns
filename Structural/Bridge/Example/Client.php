<?php

class Client
{
    public function main()
    {
        $remote = new Remote();
        $remote->togglePower();
    }
}