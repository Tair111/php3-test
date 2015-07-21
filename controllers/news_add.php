<?php


require_once __DIR__ . '/../boot.php';

$view =  new View;
if (isset($_POST['title']) && isset($_POST['text'])){
    $title =  $_POST['title'];
    $text =  $_POST['text'];
    $view->status_add_article = '';
	$view->titlestatus =  $_POST['title'];
	
	$conteyner = new News;
	$view->add = $conteyner->insertArticle($title, $text);
if ($view-add)  {
     $view->status_add_article = 'Новость добавлена';
 }
    else {
        $view->status_add_article = '!!!Новость не добавлена!!!';
    }
}

$view->display('../view/article_add.php');
