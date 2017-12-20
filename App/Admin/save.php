<?php
require __DIR__ . '/../../autoload.php';

if (!empty($_POST)) {
    $article = new \App\Models\Article();
    $article->title = $_POST['title'];
    $article->text = $_POST['text'];
    isset($_POST['id']) ? $article->id = $_POST['id'] : null;
    $article->save();
    header('location: /App/Admin/index.php');
    exit;
}