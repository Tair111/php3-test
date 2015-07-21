<?php
require_once __DIR__ . '/../boot.php';

$conteyner = new News;
$view =new View;

$view->news = $conteyner->selectArticleAll();
$view->display('/../view/article_review_all.php');

