<?php

namespace App\Traits;

trait Singleton
{
    protected static  $instance;

    protected function __construct()
    {
    }

    public static function getInstance()
    {
        if (null === static::$instance){
            static::$instance= new static;
        }
        return  static::$instance;
    }
}