<?php
require __DIR__ . '/../autoload.php';
use App\Db;

$db = new Db();
/** тест метода Execute() ---*/
$query= 'INSERT INTO test (id, test_field) VALUES (:id,:test_field)';
assert(true === $db->execute($query, [':id' => null, ':test_field' => 'Test string']));