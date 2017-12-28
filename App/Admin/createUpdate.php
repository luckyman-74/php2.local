<?php
require __DIR__ . '/../../autoload.php';
$view = new \App\View();
$authors = new \App\Models\Author();

if (!empty($_GET['id'])) {
    $view->article = \App\Models\Article::findById($_GET['id']);
} else {
    $view->article = new \App\Models\Article();
}

$authors->all = \App\Models\Author::findAll();

$view->display(__DIR__ . '/../../templates/admin/createUpdate.php');