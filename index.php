<?php
require __DIR__ . '/autoload.php';
$articles = \App\Models\Article::findLatest(3);
include __DIR__ . '/templates/index.php';