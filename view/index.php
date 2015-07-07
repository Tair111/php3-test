<html>
<head>
    <title>Новости</title>
    <meta http-equiv="refresh" content="10" />
	<meta charset="UTF-8">
</head>
<body>
    <div>
        <?foreach ($news as $key => $value): ?>
            <a href="/../controllers/news_review.php?id=<?= $value['id']; ?>">Просмотр новости № <?= $key+1; ?></a><br />
        <?php endforeach; ?>
    </div>
    <br/>
    <div>
        <a href="/../controllers/news_review_all.php">Все новости</a>
    </div>
    <br/>
    <div>
        <a href="/../controllers/news_add.php">Добавление новостей</a>
    </div>
</body>
</html>