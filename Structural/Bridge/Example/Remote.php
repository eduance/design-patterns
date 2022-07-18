<?php

class Remote
{
    protected Device $device;

    public function togglePower()
    {

    }

    public function volumeDown()
    {

    }

    public function volumeUp()
    {

    }

    public function channelUp()
    {
        $old = $this->device->getChannel();
        $this->device->setChannel($old + 1);
    }

    public function channelDown()
    {
        $old = $this->device->getChannel();
        $this->device->setChannel($old - 1);
    }
}