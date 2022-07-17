<?php

class Singleton
{
    protected static ?Singleton $instance = null;

    /**
     * You cannot call a new instance, only a static method will be able to instantiate the class.
     *
     * @return void
     */
    private function __construct()
    {
    }

    /**
     * Get the singleton instance.
     *
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if(self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}