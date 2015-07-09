<?php

require_once __DIR__ . '/../functions/db.php';

abstract class Article extends DBWork{
	abstract public function insertArticle($title, $text);
	abstract public function selectArticleOne($id);
	abstract public function selectArticleAll();
	abstract public function updateArticle($id, $new_title, $new_text);
	abstract public function delArticle($id);
}

class News extends Article{

	public function selectArticleOne($id) {
		return $this->DBQueryOne("
		SELECT * FROM news WHERE id=" .$id);
	}

	public function selectArticleAll()
	{
		return $this->DBQuery("
		SELECT * FROM news
		");
	}

	public function insertArticle($_title,$_text) {
		return $this->DBExec("
		INSERT INTO news (title,text) VALUES ('$_title','$_text')
		");
	}

	public function updateArticle($id, $new_title, $new_text) {
		return $this->DBExec("
		UPDATE news SET title='$new_title',text='$new_text' WHERE id=" .$id);
	}

	public function Article_count(){
		return $this->DBQuery("
		SELECT COUNT(*) AS count FROM news;
		");
	}

	public function delArticle($id) {
		return $this->DBExec("
		DELETE FROM news WHERE id=" .$id);
	}
}