<?php 
/*
$news = [
		[
			'title'=>'Новость первая',
			'text'=>'В лесу родилась елочка'
		],
		[
			'title'=>'Новость вторая',
			'text'=>'В лесу она росла'
		],
];
*/
require_once  'model/news.php';
	$news = News_getAll();

include 'view/index.php';