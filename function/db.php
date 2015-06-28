<?php 
function config(){
	return include './config.php';
}

function DBConnect() {
$config = config();
mysql_connect(
	$config['dbase'],
	$config['user'],
	$config['password']
	);
}

function DBQuery($sql){
	DBConnect();
	$res = msql_query($sql);
	
	$ret =[];
	while($row = mysql_fetch_assoc($res)){
		$ret[] = $row;
	}
	return $ret;
};