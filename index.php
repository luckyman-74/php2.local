<?php
require __DIR__ . '/autoload.php';
$db = new \App\Db();
var_dump(
    $db->query('SELECT * FROM news WHERE id=:id', [':id' => 1], \App\Models\Article::class)
);
