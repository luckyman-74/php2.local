<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Новости</title>
</head>
<body>
<h1>Новости</h1>

<?php

if (!empty($data)) {

    foreach ($data as $article) {

        ?>
        <a href="/article.php?id=<?php echo $article->id; ?>">
            <strong><?php echo $article->title; ?></strong>
        </a>
        <p>
            <?php echo $article->lead; ?>
        </p>

        <hr>
        <?php
    }
}
?>
</body>
</html>