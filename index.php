<?php
require __DIR__ . '/autoload.php';
$data = \App\Models\Article::findById(3);

include __DIR__ . '/Templates/index.php';
