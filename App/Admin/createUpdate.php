<?php
require __DIR__ . '/../../autoload.php';

if (!empty($_GET['id'])) {
    $article = \App\Models\Article::findById($_GET['id']);
} else {
    $article = new \App\Models\Article();
}
include __DIR__ . '/../../templates/admin/createUpdate.php';