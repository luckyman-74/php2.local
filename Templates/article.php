<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
<h1>Новости</h1>

<?php if (!empty($data)) : ?>

    <strong><?php echo $data->title; ?></strong>
    <p>
        <?php echo $data->lead; ?>
    </p>
    <hr>
<?php endif; ?>
<a href="/">Вернутся назад</a>
</body>
</html>