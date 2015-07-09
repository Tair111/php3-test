<?php
require_once __DIR__ . '/../models/news.php';

$conteyner = new News;
$news = $conteyner->selectArticleAll();

require __DIR__ .'/../view/article_review_all.php';
