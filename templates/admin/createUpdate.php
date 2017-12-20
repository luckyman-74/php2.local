<!doctype html>
<html lang=ru>

<head>
    <meta charset="UTF-8">
    <title>Редактирование/добавление новости</title>
    <link rel="stylesheet" href="/css/template.css" type="text/css">
</head>

<body>
<hr>
<form action="/App/Admin/save.php" method="post">

    <h1>
        <?php if (!empty($article->id)) : ?>
            Редактирование новости
            <input type="hidden" name="id" value="<?php echo $article->id ?>">
        <?php else: ?>
            Добавление новости
        <?php endif; ?>
    </h1>

    <p><label for="title"><strong>Заголовок:</strong></label></p>
    <input type="text" name="title" id="title" class="title" value="<?php echo $article->title ?? null ?>">
    <p><label for="text"><strong>Текст:</strong></label></p>
    <textarea name="text" id="text" class="text"><?php echo $article->text ?? null ?></textarea>
    <hr>
    <input type="submit" value="Сохранить" class="button">
    <a href="/App/Admin/index.php" class="button">Отмена</a>
</form>

</body>
</html>
