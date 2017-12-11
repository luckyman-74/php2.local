<?php
require __DIR__ . '/../autoload.php';

if (!empty($_GET)) {
    $article = \App\Models\Article::findById($_GET['id']);
    $article->delete();
    header('location: /admin/index.php');
};
