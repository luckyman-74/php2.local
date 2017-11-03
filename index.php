<?php
require __DIR__ . '/autoload.php';
$data = \App\Models\Article::findAll();
var_dump($data);

/*$data1 = \App\Models\Article::findById(2);
var_dump($data1);*/