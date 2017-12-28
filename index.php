<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->news = \App\Models\Article::findLatest(4);
$view->display(__DIR__ . '/templates/index.php');
