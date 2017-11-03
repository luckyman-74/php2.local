<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php2', 'root', '');
    }

    public function query(string $sql, array $params = [], string $class = \stdClass::class): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute(string $query, array $params = []): bool
    {
        return $this->dbh->prepare($query)->execute($params);
    }
}