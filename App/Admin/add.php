<?php
require __DIR__ . '/../../autoload.php';
if (!empty($_POST)) {
    $article = new \App\Models\Article();
    $article->title = $_POST['title'];
    $article->text = $_POST['text'];
    $article->save();
    header('location: /App/Admin/index.php');
    exit;
}
include __DIR__ . '/../../templates/admin/articleForm.php';