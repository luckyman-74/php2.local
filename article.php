<?php
require __DIR__ . '/autoload.php';
if (!isset($_GET['id'])) {
    die;
}

$view = new \App\View();
$view->article = \App\Models\Article::findById((int)$_GET['id']);
$view->display(__DIR__ . '/templates/article.php');