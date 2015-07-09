<html>
<head>
    <title>Новости</title>
    <meta charset="UTF-8">
</head>
<body>
	<a href="/../index.php">На главную</a>
    <article>
        <h1><?=$one_article['title'];?></h1>
        <div><?=$one_article['text'];?></div>
    </article>
    <div><a href="/../controllers/news_edit.php?id=<?=$one_article['id'] ;?>">Редактировать</a></div>
</body>
</html>