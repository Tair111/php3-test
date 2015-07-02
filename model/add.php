<?php 

require_once __DIR__ . '/../function/db.php';
	
	
if ($_POST['title'] and $_POST['text']){
	$title = $_POST['title'];
	$text = $_POST['text'];
	Add_Article($title, $text);
	} else {
	echo "Заполните все графы";}
	

include '../view/add.php';