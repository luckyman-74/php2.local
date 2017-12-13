<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Новости</title>
</head>
<body>

<?php if (!empty($articles)) : ?>
    <h1>Новости</h1>
    <?php foreach ($articles as $article) : ?>
        <a href="/article.php?id=<?php echo $article->id; ?>">
            <strong><?php echo $article->title; ?></strong>
        </a>
        <p>
            <?php echo $article->text; ?>
        </p>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>