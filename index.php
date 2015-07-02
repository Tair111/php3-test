<?php 

require_once  'model/news.php';
	$news = News_getAll();

include 'view/index.php';