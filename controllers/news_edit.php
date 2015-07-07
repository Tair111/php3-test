<?php
    require_once  __DIR__.'/../models/news.php';


   if (isset($_GET['id'])){
		$id = $_GET['id'];
        $edit_article = News_getOne($_GET['id']);
    }
		
	
	if (isset($_POST['edit_article'])){
		$new_title = $_POST['title'];
		$new_text = $_POST['text'];
		$id = $_POST['id'];		
		
		if (News_editArticle($id, $new_title, $new_text))  {
			$status_edit_article = 'Новость изменена';
		}
			else {
				$status_edit_article = '!!!Новость не изменена!!!';
		}
	}
	
	if (isset($_POST['del_article'])){
		$id = $_POST['id'];		
		if (News_delArticle($id))  {
			$status_edit_article = 'Новость удалена';
		}
			else {
				$status_edit_article = '!!!Новость не удалена!!!';
		}
	}
	

    include __DIR__.'/../view/article_edit.php';
