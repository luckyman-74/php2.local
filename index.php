<?php
require __DIR__ . '/autoload.php';
$data = \App\Models\Article::findAll();
var_dump($data);

