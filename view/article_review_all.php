<html>
<head>
    <title>Новости</title>
    <meta charset="UTF-8">
</head>
<body>
<a href="/../index.php?route=news/index">На главную</a>
<?php foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
    </article>
<?php endforeach; ?>
</body>
</html>