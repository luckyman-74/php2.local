<?php
require __DIR__ . '/../autoload.php';

use App\Db;

$db = new Db();

/* тест метода execute() */

$sql = /** @lang text */ 'INSERT INTO test (id, test_field) VALUES (:id,:test_field)';
assert(true === $db->execute($sql, [':id' => null, ':test_field' => 'Test string']));

$sql = /** @lang text */ 'UPDATE test SET test_field = :text WHERE id = :id';
assert(true === $db->execute($sql, [':text' => 'New Test string', ':id' => 4]));


