<?php

class Database
{
    /**
     * The database instance.
     *
     * @var ?Database
     */
    private static ?Database $instance = null;

    private function __construct()
    {
        // Some initialization..
    }

    /**
     * Get the current instance.
     *
     * @param $instance
     * @return Database
     */
    public static function getInstance($instance): Database
    {
        if(self::$instance === null) {
            return new Database();
        }

        return self::$instance;
    }

    /**
     * Now you can access this method anywhere within your app.
     *
     * @param $sql
     * @return array
     */
    public function query($sql): array
    {
        return [];
    }
}