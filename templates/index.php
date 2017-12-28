<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Новости</title>
</head>
<body>

<?php if (!empty($news)) : ?>
    <h1>Новости</h1>
    <?php foreach ($news as $article) : ?>
        <a href="/article.php?id=<?php echo $article->id; ?>">
            <h2><span class="art_header"><?php echo $article->title; ?></span></h2>
        </a>
        <p>
            <?php echo $article->text; ?>
        </p>
        <em>Автор:
            <?php echo (null === $article->author_id) ? 'Неизвестный автор' : $article->author->name; ?>
        </em>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>
