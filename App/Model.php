<?php

namespace App;

abstract class Model
{
    protected static $table;
    public $id;

    public static function findAll(): array
    {
        $sql = 'SELECT * FROM ' . static::$table;
        return Db::instance()->query($sql, static::class);
    }

    public static function findById(int $id)
    {
        $sql = /** @lang text */
            'SELECT * FROM ' . static::$table . ' WHERE id = :id LIMIT 1';
        $result = Db::instance()->query($sql, static::class, [':id' => $id]);
        return $result ? $result[0] : null;
    }

    public static function findLatest(int $limit): array
    {
        $sql = /** @lang text */
            'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $limit;
        return Db::instance()->query($sql, static::class);
    }

    public function isNew(): bool
    {
        return empty($this->id);
    }

    protected function update(): bool
    {
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
        return Db::instance()->execute($sql, $values);
    }

    protected function insert(): bool
    {
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
        return Db::instance()->execute($sql, $values);
    }

    public function delete(): bool
    {
        $sql = /** @lang text */
            'DELETE FROM ' . static::$table . ' WHERE id=:id';
        return Db::instance()->execute($sql, [':id' => $this->id]);
    }

    public function save(): bool
    {
        if ($this->isNew()) {
            return $this->insert();
        }
        return $this->update();
    }

}