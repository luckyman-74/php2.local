<?php

namespace App;

abstract class Model
{
    protected static $table;
    public $id;

    public static function findAll(): array
    {
        $sql = 'SELECT * FROM ' . static::$table;
        return (new Db())->query($sql, static::class);
    }

    public static function findById(int $id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id = :id LIMIT 1';
        $result = (new Db())->query($sql, static::class, [':id' => $id]);
        return $result ? $result[0] : null;
    }

    public static function findLatest(int $limit): array
    {
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $limit;
        return (new Db())->query($sql, static::class);
    }

    public function update(): void
    {
        $fields = get_object_vars($this);
        $sets = [];
        $data = [];
        foreach ($fields as $name => $value) {
            $data[':' . $name] = $value;
            if ('id' === $name) {
                continue;
            }
            $sets[] = $name . '=:' . $name;
        }
        $sql = 'UPDATE ' . static::$table . '
        SET ' . implode(', ', $sets) . '
        WHERE id=:id';
        (new Db())->execute($sql, $data);

    }
}