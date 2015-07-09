<?php
    require_once  __DIR__.'/../models/news.php';


   if (isset($_GET['id'])){
		
		$conteyner = new News;
		$id = $_GET['id'];
        $edit_article = $conteyner->selectArticleOne($id);
    }
		
	
	if (isset($_POST['edit_article'])){
		$new_title = $_POST['title'];
		$new_text = $_POST['text'];
		$id = $_POST['id'];		
		
		$conteyner = new News;
		$edit = $conteyner->updateArticle($id, $new_title, $new_text);
		if ($edit)  {
			$status_edit_article = 'Новость изменена';
		}
			else {
				$status_edit_article = '!!!Новость не изменена!!!';
		}
	}
	
	if (isset($_POST['del_article'])){
		$id = $_POST['id'];	
		$new_title = $_POST['title'];

		$conteyner = new News;
		$del = $conteyner->delArticle($id);
		if ($del)  {
			$status_edit_article = 'Новость удалена';
		}
			else {
				$status_edit_article = '!!!Новость не удалена!!!';
		}
	}
	

    include __DIR__.'/../view/article_edit.php';
