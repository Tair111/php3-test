<?php 
function config(){
	return include __DIR__ . '/../config.php';
}

function DBConnect() {
$config = config();
mysql_connect(
	$config['db']['host'],
	$config['db']['user'],
	$config['db']['password']
	);
mysql_select_db($config['db']['dbname']);
}
	date_default_timezone_set('Europe/Moscow');	
	setlocale(LC_ALL, 'ru_RU.UTF-8'); // Устанавливаем нужную локаль (для дат, денег, запятых и пр.)
	mb_internal_encoding('UTF-8'); // Устанавливаем кодировку строк
	//mysql_set_charset($sql, "utf8");

function DBQuery($sql){
	DBConnect();
	$res = mysql_query($sql);
	if(!$res)
	return [];
	
	$ret =[];
	while($row = mysql_fetch_assoc($res)){
		$ret[] = $row;
	}
	return $ret;
}

function Edit($sql){
	DBConnect();
	$res = mysql_query($sql);
	
}

function Add_Article($title, $text) {
	DBConnect();
	$res = mysql_query("INSERT INTO news (title, text) VALUES ('$title', '$text')");
};