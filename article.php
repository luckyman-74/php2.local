<?php
require __DIR__ . '\autoload.php';
if (!isset($_GET['id'])) {
    die;
}

$articleId = (int)$_GET['id'];

$data = \App\Models\Article::findById($articleId);
include __DIR__.'\Templates\articleTemplate.php';