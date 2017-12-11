<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Административная панель</title>
    <link rel="stylesheet" href="/css/template.css" type="text/css">
</head>

<body>

<?php if (!empty($articles)) : ?>
    <h1><span class="panel"> Админ-панель</span></h1>
    <a href="/admin/add.php/" class="button">Добавить новость</a>
 
    <h3>Список новостей в базе данных:</h3>
    <?php foreach ($articles as $article) : ?>
        <h2><span class="art_header"><?php echo $article->title; ?></span></h2>
        <?php echo $article->lead; ?>
        <hr>
        <a href="/admin/edit.php/?id=<?php echo $article->id; ?>" class="button" >Редактировать</a>
        <a href="/admin/delete.php/?id=<?php echo $article->id; ?>" class="button" >Удалить</a>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>