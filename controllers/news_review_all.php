<?php
require_once __DIR__ . '/../models/news.php';

$news = News_getAll();

include __DIR__ .'/../view/article_review_all.php';
