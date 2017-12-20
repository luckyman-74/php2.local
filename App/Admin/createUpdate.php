<?php
require __DIR__ . '/../../autoload.php';

!empty($_GET['id']) ? $article = \App\Models\Article::findById($_GET['id']) : null;
include __DIR__ . '/../../templates/admin/articleForm.php';