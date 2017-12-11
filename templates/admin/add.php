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
<form action="/admin/add.php" method="post">
    <p><label for="title"><strong>Заголовок:</strong></label></p>
    <textarea class="title" name="title" id="title"></textarea>
    <p><label for="lead"><strong>Текст:</strong></label></p>
    <textarea class="lead" name="lead" id="lead"></textarea>
    <p><input type="submit" value="Сохранить"></p>
</form>
<hr>
</body>
</html>
