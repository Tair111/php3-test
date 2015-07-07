<?php
require_once __DIR__.'/../models/news.php';

if (isset($_POST['title']) && isset($_POST['text'])){
    $title =  $_POST['title'];
    $text =  $_POST['text'];
    $status_add_article = '';
if (News_setArticle($title,$text))  {
     $status_add_article = 'Новость добавлена';
 }
    else {
        $status_add_article = '!!!Новость не добавлена!!!';
    }
}

include __DIR__.'/../view/article_add.php';


