<!doctype html>
<html lang=ru>

<head>
    <meta charset="UTF-8">
    <title>Редактирование новости</title>
    <link rel="stylesheet" href="/css/template.css" type="text/css">
</head>

<body>
<?php if (!empty($article)) : ?>
<h1>Редактирование новости</h1>
<hr>
<form action="/admin/edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $article->id  ?>">

    <?php else: ?>

    <h1>Добавление новости</h1>
    <hr>
    <form action="/admin/add.php" method="post">
        <?php endif; ?>

        <p><label for="title"><strong>Заголовок:</strong></label></p>
        <textarea class="title" name="title" id="title"><?php echo $article->title ?? null ?></textarea>

        <p><label for="lead"><strong>Текст:</strong></label></p>
        <textarea class="lead" name="lead" id="lead"><?php echo $article->lead ?? null ?></textarea>

        <hr>
        <input type="submit" value="Сохранить" class="button">
        <a href="/admin/index.php" class="button">Отмена</a>
    </form>

</body>
</html>
