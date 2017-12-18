<?php

namespace App;

use App\Traits\Singleton;

class Config
{
    use Singleton;
    public $data;

    private function __construct()
    {
        $this->data = require __DIR__ . '/../config.php';
    }
}