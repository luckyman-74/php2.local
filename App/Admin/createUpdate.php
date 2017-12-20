<?php
require __DIR__ . '/../../autoload.php';

$article = !empty($_GET['id']) ? \App\Models\Article::findById($_GET['id']) : null;
include __DIR__ . '/../../templates/admin/createUpdate.php';