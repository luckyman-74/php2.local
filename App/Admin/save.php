<?php
require __DIR__ . '/../../autoload.php';

if (!empty($_POST['id'])) {
    $article = \App\Models\Article::findById($_POST['id']);
    if (null === $article) {
        exit ('Не существует записи с id: ' . $_POST['id']);
    }
} else {
    $article = new \App\Models\Article();
}
$article->title = $_POST['title'];
$article->text = $_POST['text'];
$article->author_id = (0 !== (int)$_POST['author_id']) ? $_POST['author_id'] : null;

$article->save();
header('location: /App/Admin/index.php');