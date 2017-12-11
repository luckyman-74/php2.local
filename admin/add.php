<?php
require __DIR__ . '/../autoload.php';
if (!empty($_POST)) {
    $article = new \App\Models\Article();
    $article->title = $_POST['title'];
    $article->lead = $_POST['lead'];
    $article->save();
    header('location: /admin/index.php');
    exit;
}
include __DIR__ . '/../templates/admin/articleForm.php';