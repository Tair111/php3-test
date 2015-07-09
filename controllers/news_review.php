<?php
    require_once  __DIR__.'/../models/news.php';

    if (isset($_GET['id'])){
		$conteyner = new News;
        $one_article = $conteyner->selectArticleOne($_GET['id']);
    }

    include __DIR__.'/../view/article_review.php';
