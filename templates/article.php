<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h1>Новости</h1>

<?php if (!empty($article)) : ?>

    <strong><?php echo $article->title; ?></strong>
    <p>
        <?php echo $article->text; ?>
    </p>
    <hr>
<?php endif; ?>
<a href="/">Вернутся назад</a>
</body>
</html>