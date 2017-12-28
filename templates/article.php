<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h1>Новости</h1>

<?php if (!empty($article)) : ?>

    <h2><span class="art_header"><?php echo $article->title; ?></span></h2>
    <p>
        <?php echo $article->text; ?>
    </p>
    Автор:
    <em><?php echo (null === $article->author_id) ? 'Неизвестный автор' : $article->author->name; ?> </em>
    <hr>

<?php endif; ?>
<a href="/">Вернутся назад</a>
</body>
</html>