<?php
require __DIR__ . '/../autoload.php';
if (!empty($_GET['id'])) {
    $article = \App\Models\Article::findById($_GET['id']);
    include __DIR__ . '/../templates/admin/edit.php';
}
if (!empty($_POST)) {
    $article = new \App\Models\Article();
    $article->id = $_POST['id'];
    $article->title = $_POST['title'];
    $article->lead = $_POST['lead'];
    $article->save();
    header('location: /admin/index.php');
}