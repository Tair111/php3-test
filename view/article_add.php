<html>
<head>
    <title>Добавление новости</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Добавление новости:</h1>
<form action="/../index.php?route=news/add" method="post">
    <p>Заголовок:<br />
        <input type="text" name="title" required placeholder=" |Enter title" autofocus=""/><br />
    </p>
    <p>Текст:<br />
        <textarea name="text" cols="40" rows="3" required></textarea>
    </p>
    <input type="submit" name="submit" value="Добавить"/>
</form>
    <a href="/../index.php?route=news/index">На главную</a>
    <br />
</body>
</html>
<?php

    echo $titlestatus.' '.$status_add_article;