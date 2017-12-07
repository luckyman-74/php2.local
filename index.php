<?php
require __DIR__ . '/autoload.php';

$articles = \App\Models\Article::findLatest(3);
include __DIR__ . '/Templates/index.php';

/** @var \App\Models\Article $article */
/*$article = \App\Models\Article::FindById(4);
include __DIR__ . '/Templates/article.php';
$article -> title = 'test_test_test';
$article -> update();*/