<?php
require __DIR__ . '/../../autoload.php';

if (!empty($_POST['id'])) {
    if (null !== $article) {
        $article = \App\Models\Article::findById($_POST['id']);
    } else {
        exit ('Не существует записи с id: ' . $_POST['id']);
    }
}else {
$article = new \App\Models\Article();

    $article->title = $_POST['title'];
    $article->text = $_POST['text'];
    $article->save();
    header('location: /App/Admin/index.php');
    exit;
}