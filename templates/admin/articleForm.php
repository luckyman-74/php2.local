<!doctype html>
<html lang=ru>

<head>
    <meta charset="UTF-8">
    <title>Редактирование новости</title>
    <link rel="stylesheet" href="/css/template.css" type="text/css">
</head>

<body>

<h1>
    <?php if (!empty($article)) : ?>
        Редактирование новости
    <?php else: ?>
        Добавление новости
    <?php endif; ?>
</h1>
<hr>
<form action="/admin/<?php echo !empty($article) ? 'edit.php' : 'add.php'; ?>" method="post">

    <?php if (!empty($article)) : ?>
        <input type="hidden" name="id" value="<?php echo $article->id ?>">
    <?php endif; ?>

    <p><label for="title"><strong>Заголовок:</strong></label></p>
    <input type="text" name="title" id="title" class="title" value="<?php echo $article->title ?? null ?>">

    <p><label for="lead"><strong>Текст:</strong></label></p>
    <textarea class="lead" name="lead" id="lead"><?php echo $article->lead ?? null ?></textarea>

    <hr>
    <input type="submit" value="Сохранить" class="button">
    <a href="/admin/index.php" class="button">Отмена</a>
</form>

</body>
</html>
