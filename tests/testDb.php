<?php
require __DIR__ . '/../autoload.php';

use App\Db;

$db = new Db();

/* тест метода execute() */

$query = 'INSERT INTO test (id, test_field) VALUES (:id,:test_field)';
assert(true === $db->execute($query, [':id' => null, ':test_field' => 'Test string']));

$query = 'UPDATE test SET test_field = :text WHERE id = :id';
assert(true === $db->execute($query, [':text' => 'New Test string', ':id' => 4]));


