<?php
require __DIR__ . '/../../autoload.php';

$view = new \App\View();
$view->news =\App\Models\Article::findAll();
$view->display(__DIR__ . '/../../templates/admin/index.php');
