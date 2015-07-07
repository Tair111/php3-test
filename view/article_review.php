<html>
<head>
    <title>Новости</title>
    <meta charset="UTF-8">
</head>
<body>
    <article>
        <h1><?=$one_article[0]['title'];?></h1>
        <div><?=$one_article[0]['text'];?></div>
    </article>
    <div><a href="/../controllers/news_edit.php?id=<?=$one_article[0]['id'] ;?>">Редактировать</a></div>
</body>
</html>