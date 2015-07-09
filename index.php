<?php

require_once __DIR__ . '/models/news.php';

$conteyner = new News;
$news = $conteyner->selectArticleAll();
$count = $conteyner->Article_count();

include 'view/index.php';