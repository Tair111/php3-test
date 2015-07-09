<?php
require_once __DIR__ . '/../models/news.php';

$conteyner = new News;
$news = $conteyner->selectArticleAll();

include __DIR__ .'/../view/article_review_all.php';
