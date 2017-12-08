<?php
require __DIR__ . '/autoload.php';

/*$articles = \App\Models\Article::findLatest(3);
include __DIR__ . '/Templates/index.php';*/

/** @var \App\Models\Article $article */
/*$article = \App\Models\Article::FindById(4);
include __DIR__ . '/Templates/article.php';*/


$article = \App\Models\Article::findById(9);



$article->delete();


/*$article = new \App\Models\Article();
$article->title='YJDFZ';
$article->lead='dfgdfgdfgdfgdfgdf';
$article ->save();*/