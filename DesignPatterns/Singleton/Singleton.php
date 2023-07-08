<?php

class Singleton
{
    private static $instance;

    private function __construct()
    {}

    static public function getInstance(): Singleton
    {
        if(!isset(self::$instance)) {
            self::$instance = new Singleton;
        }
        return self::$instance;
    }
}
