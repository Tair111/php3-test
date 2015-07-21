<?php
    require_once  __DIR__.'/../boot.php';

	$view = new View;
	
   if (isset($_GET['id'])){
		
		$conteyner = new News;
		$id = $_GET['id'];
        $view->edit_article = $conteyner->selectArticleOne($id);
    }
		
	
	if (isset($_POST['edit_article'])){
		$new_title = $_POST['title'];
		$new_text = $_POST['text'];
		$id = $_POST['id'];	
		$view->title_status =  $_POST['title'];
		
		$conteyner = new News;
		$view->edit = $conteyner->updateArticle($id, $new_title, $new_text);
		if ($view->edit)  {
			$view->status_edit_article = 'Новость изменена';
		}
			else {
				$view->status_edit_article = '!!!Новость не изменена!!!';
		}
	}
	
	if (isset($_POST['del_article'])){
		$id = $_POST['id'];	
		$new_title = $_POST['title'];
		$view->title_status =  $_POST['title'];

		$conteyner = new News;
		$view->del = $conteyner->delArticle($id);
		if ($view->del)  {
			$view->status_edit_article = 'Новость удалена';
		}
			else {
				$view->status_edit_article = '!!!Новость не удалена!!!';
		}
	}
	
	$view->display(__DIR__.'/../view/article_edit.php');
    //require __DIR__.'/../view/article_edit.php';
