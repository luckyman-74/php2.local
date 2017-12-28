<!doctype html>
<html lang=ru>

<head>
    <meta charset="UTF-8">
    <title><?php echo !empty($article) ? 'Редактирование новости' : 'Добавление новости' ?></title>
    <link rel="stylesheet" href="/css/template.css" type="text/css">
</head>

<body>
<hr>
<form action="/App/Admin/save.php" method="post">

    <h1>
        <?php if (!empty($article)) : ?>
            Редактирование новости
            <input type="hidden" name="id" value="<?php echo $article->id ?>">
        <?php else: ?>
            Добавление новости
        <?php endif; ?>
    </h1>

    <p><label for="title"><strong>Заголовок:</strong></label></p>
    <input type="text" name="title" id="title" class="title" required value="<?php echo $article->title; ?>">
    <p><label for="text"><strong>Текст:</strong></label></p>
    <textarea name="text" id="text" class="text" required><?php echo $article->text; ?></textarea>
   <p><label for="author"><strong>Автор:</strong></label></p>
    <select name="author" id="author"  required>
        <option value="0">Автор не выбран</option>
        <?php foreach ($authors as $author) : ?>
            <option value="<?php echo $author->id; ?>"
                <?php if ($article->author_id === $author->id) : ?>
                    selected
                <?php endif; ?>
            ><?php echo $author->name; ?></option>
        <?php endforeach; ?>
    </select>
    <hr>
    <input type="submit" value="Сохранить" class="button">
    <a href="/App/Admin/index.php" class="button">Отмена</a>
</form>

</body>
</html>
