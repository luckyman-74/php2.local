<?php

namespace App;


abstract class Model
{
    protected static $table = null;
    public $id;

    public static function findAll(): array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table;

        return $db->query($sql, static::class);
    }
}