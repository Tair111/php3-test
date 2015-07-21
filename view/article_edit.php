<html>
<head>
    <title>Редактирование новости</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Редактирование новости:</h1>
<form action="/../controllers/news_edit.php" method="post">
	<input type="hidden" name="id" value="<?=$_GET['id']?>" />
    <p>Заголовок:<br />
        <input type="text" name="title" value="<?=$edit_article['title'];?>" required placeholder=" |Enter title" autofocus=""/><br />
    </p>
    <p>Текст:<br />
        <textarea name="text" cols="40" rows="3" required><?=$edit_article['text'];?></textarea>
    </p>
    <input type="submit" name="edit_article" value="Отправить"/>
	<input type="submit" name="del_article" value="Удалить"/>
</form>
    <a href="/../index.php">На главную</a>
    <br />
</body>
</html>
<?php

    echo $title_status.' '.$status_edit_article;
