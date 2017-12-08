<?php

namespace App;

class Db
{
    use Singleton;

    protected $dbh;

protected function __construct()
{
    $config = new Config;
    $this->dbh = new \PDO(
        'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
        $config->data['db']['username'],
        $config->data['db']['password']
    );
}

    public function query(string $sql, string $class, array $params = []): array
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