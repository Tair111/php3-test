<html>
<head>
    <title>Новости</title>
    <meta http-equiv="refresh" content="10" />
	<meta charset="UTF-8">
</head>
<body>
    <div>
        <?foreach ($news as $key => $value): ?>
            <a href="./index.php?route=news/one&id=<?= $value['id']; ?>">Просмотр новости № <?= $key+1; ?></a><br />
        <?php endforeach; ?>
    </div>
    <br/>
    <div>
        <a href="./index.php?route=news/all">Все новости</a>
    </div>
    <br/>
    <div>
        <a href="./index.php?route=news/add">Добавление новостей</a>
    </div>
</body>
</html>