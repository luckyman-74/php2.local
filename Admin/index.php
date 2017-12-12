<?php
require __DIR__ . '/../autoload.php';
$articles = \App\Models\Article::findAll();
include __DIR__.'/../templates\admin\index.php';