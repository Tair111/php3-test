<?php
    require_once  __DIR__.'/../boot.php';

	$view = new View;
    if (isset($_GET['id'])){
		$conteyner = new News;
        $view->one_article = $conteyner->selectArticleOne($_GET['id']);
    }
	$view->display(__DIR__. '/../view/article_review.php');
   
