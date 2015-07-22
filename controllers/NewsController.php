<?php 
require_once __DIR__ . '/AController.php';

class NewsController
	extends AController {

	public function actionIndex()
	{
		$view = new View;
		$conteyner = new News;
		$view->news = $conteyner->selectArticleAll();
		$view->display('view/index.php');
	}
	
	public function actionAll()
	{
		$conteyner = new News;
		$view =new View;

		$view->news = $conteyner->selectArticleAll();
		$view->display(__DIR__ .'/../view/article_review_all.php');
	}
	
	public function actionOne()
	{
		$view = new View;
		if (isset($_GET['id'])){
		$conteyner = new News;
        $view->one_article = $conteyner->selectArticleOne($_GET['id']);
		}
		$view->display(__DIR__ . '/../view/article_review.php');
	}
	
	public function actionEdit()
	{
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
	
		$view->display(__DIR__ .'/../view/article_edit.php');
	}
	
	public function actionAdd()
	{
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

		$view->display(__DIR__ .'/../view/article_add.php');
	}
}