<?php

class Kernel
{
    /**
     * The defined OS.
     *
     * @var string
     */
    protected string $os = 'linux';

    /**
     * The factory for the OS.
     *
     * @var GUIFactory
     */
    protected GUIFactory $factory;

    /**
     *
     *
     * @throws Exception
     */
    public function main()
    {
        if($this->os === 'linux') {
            $this->factory = new LinuxFactory();
        }elseif($this->os === 'windows') {
            $this->factory = new WindowsFactory();
        }else{
            throw new Exception("We are not supporting this OS for now, come back later!");
        }
    }
}