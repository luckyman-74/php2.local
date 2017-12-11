<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Административная панель</title>
</head>
<body>

<?php if (!empty($articles)) : ?>
    <h1><span style="color: #ED5565;"> Админ-панель</span></h1>


    <hr>
    <h3>Список новостей в базе данных:</h3>
    <?php foreach ($articles as $article) : ?>
        <h2><span style="color: #1b28ed;"><?php echo $article->title; ?></span></h2>
        <?php echo $article->lead; ?>
        <hr>
        <a href="/admin/edit.php/?id=<?php echo $article->id; ?>">Редактировать</a>
        <a href="/admin/delete.php/?id=<?php echo $article->id; ?>">Удалить</a>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>


</body>
</html>

