<?php

require_once __DIR__ . '/models/news.php';

$news = News_getAll();
$count = News_count();

include 'view/index.php';