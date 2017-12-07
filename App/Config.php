<?php

namespace App;

class Config
{
    public $data;

    public function __construct()
    {
        $this->data = require __DIR__ . '/../config.php';
    }

}