<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>�������</title>
</head>
<body>
	<a href="model/add.php">�������� ������</a>
	<br>
	<br>
	<?php foreach ($news as $article): ?>
	<article>
		<h1><?=$article['title'];?></h1>
		<div><?=$article['text'];?></div>
		<hr>
	</article>
	<?php endforeach; ?>
</body>
</html>