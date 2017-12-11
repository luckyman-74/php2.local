<!doctype html>
<html lang=ru>
<style type="text/css">
    .title {
        width: 800px; /* Ширина в пикселах */
        height: 50px;
    }

    .lead {
        width: 800px; /* Ширина в пикселах */
        height: 150px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>Редактирование новости</title>
</head>
<body>
<h1>Редактирование новости</h1>
<hr>
<?php if (!empty($article)) : ?>
    <form action="/admin/edit.php" method="post">
        <p><label for="title"><strong>Заголовок:</strong></label></p>
        <textarea class="title" name="title" id="title"><?php echo $article->title ?></textarea>
        <p><label for="lead"><strong>Текст:</strong></label></p>
        <textarea class="lead" name="lead" id="lead"><?php echo $article->lead ?></textarea>
        <input type="hidden" name="id" value="<?php echo $article->id ?>">
        <hr>
        <input type="submit" value="Сохранить">
    </form>
<?php endif; ?>
</body>
</html>
