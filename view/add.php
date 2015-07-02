<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Новости</title>
</head>
<body>
<br>
<br>
<a href="../index.php">На главную</a>
	<form method="post">
		Название:
		<br>
		<input type="text" name="title" value="<?=$title?>"/>
		<br>
		Содержание:
		<br/>
		<textarea name="text"><?=$text?></textarea>
		<br/>
		<input type="submit" value="Добавить" />
	</form>
	
</body>
</html>