<html>
<head>
    <title>Новости</title>
    <meta charset="UTF-8">
</head>
<body>
	<a href="/../index.php?route=news/index">На главную</a>
    <article>
        <h1><?=$one_article['title'];?></h1>
        <div><?=$one_article['text'];?></div>
    </article>
    <div><a href="/../index.php?route=news/edit&id=<?=$one_article['id'] ;?>">Редактировать</a></div>
</body>
</html>