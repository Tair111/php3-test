<html>
<head>
    <title>Добавление новости</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Добавление новости:</h1>
<form action="/../controllers/news_add.php" method="post">
    <p>Заголовок:<br />
        <input type="text" name="title" required placeholder=" |Enter title" autofocus=""/><br />
    </p>
    <p>Текст:<br />
        <textarea name="text" cols="40" rows="3" required></textarea>
    </p>
    <input type="submit" name="submit" value="Добавить"/>
</form>
    <a href="/../index.php">На главную</a>
    <br />
</body>
</html>
<?php

    echo $title.' '.$status_add_article;