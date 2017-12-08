<?php
require __DIR__ . '/autoload.php';

$articles = \App\Models\Article::findLatest(3);
include __DIR__ . '/Templates/index.php';

/** @var \App\Models\Article $article */
/*$article = \App\Models\Article::FindById(4);
include __DIR__ . '/Templates/article.php';*/


/*$article = \App\Models\Article::findById(4);
$article->title = 'Россияне определили порог собственной бедности////';

$article->update();*/


/*$article = new \App\Models\Article();
$article->title='Заголовок статьи';
$article->lead='Текст статьи';
$article ->insert();*/