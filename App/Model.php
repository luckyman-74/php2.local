<?php

namespace App;


abstract class Model
{
    protected static $table = null;
    public $id;

    public static function findAll(): array
    {
        $sql = 'SELECT * FROM ' . static::$table;

        return (new Db())->query($sql, static::class);
    }

    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id = :id LIMIT 1';
        $result = (new Db())->query($sql, static::class, [':id' => $id]);
        return empty($result) ? false : $result[0];
    }
}