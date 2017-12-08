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
        $sql = /** @lang text */
            'SELECT * FROM ' . static::$table . ' WHERE id = :id LIMIT 1';
        $result = (new Db())->query($sql, static::class, [':id' => $id]);
        return $result ? $result[0] : null;
    }

    public static function findLatest(int $limit): array
    {
        $sql = /** @lang text */
            'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $limit;
        return (new Db())->query($sql, static::class);
    }

    public function isNew(): bool
    {
        return empty($this->id);
    }

    public function update(): void
    {
        if (true === $this->isNew()) {
            return;
        }
        $fields = get_object_vars($this);
        $columns = [];
        $values = [];
        foreach ($fields as $name => $value) {
            $values[':' . $name] = $value;
            if ('id' === $name) {
                continue;
            }
            $columns[] = $name . '=:' . $name;
        }
        $sql = 'UPDATE ' . static::$table . '
        SET ' . implode(', ', $columns) . '
        WHERE id=:id';
        (new Db())->execute($sql, $values);
    }

    public function insert(): void
    {
        if (false === $this->isNew()) {
            return;
        }
        $fields = get_object_vars($this);
        $columns = [];
        $values = [];
        foreach ($fields as $name => $value) {
            if ('id' === $name) {
                continue;
            }
            $columns[] = $name;
            $values[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::$table . ' 
            (' . implode(',', $columns) . ')
            VALUES
            (' . implode(',', array_keys($values)) . ')';
        (new Db())->execute($sql, $values);
    }

    public function save()
    {
        if ($this->isNew()) {
            return $this->insert();
        }
        return $this->update();
    }

}