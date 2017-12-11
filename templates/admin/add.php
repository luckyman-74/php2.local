<!doctype html>
<html lang=ru>

<head>
    <meta charset="UTF-8">
    <title>Редактирование новости</title>
    <link rel="stylesheet" href="/css/template.css" type="text/css">
</head>

<body>
<h1>Редактирование новости</h1>
<hr>
<form action="/admin/add.php" method="post">
    <p><label for="title"><strong>Заголовок:</strong></label></p>
    <textarea class="title" name="title" id="title"></textarea>
    <p><label for="lead"><strong>Текст:</strong></label></p>
    <textarea class="lead" name="lead" id="lead"></textarea>
    <hr>
    <p><input type="submit" value="Сохранить" class="button"></p>
</form>
</body>
</html>
