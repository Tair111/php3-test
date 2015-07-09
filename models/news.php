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

	private $db;
	
	public function __construct() {
		$this->db = new DBWork();
	}

	public function selectArticleOne($id) {
		return $this->db->DBQueryOne("
		SELECT * FROM news WHERE id=" .$id);
	}

	public function selectArticleAll()
	{
		return $this->db->DBQuery("
		SELECT * FROM news
		");
	}

	public function insertArticle($_title,$_text) {
		return $this->db->DBExec("
		INSERT INTO news (title,text) VALUES ('$_title','$_text')
		");
	}

	public function updateArticle($id, $new_title, $new_text) {
		return $this->db->DBExec("
		UPDATE news SET title='$new_title',text='$new_text' WHERE id=" .$id);
	}

	public function Article_count(){
		return $this->db->DBQuery("
		SELECT COUNT(*) AS count FROM news;
		");
	}

	public function delArticle($id) {
		return $this->db->DBExec("
		DELETE FROM news WHERE id=" .$id);
	}
}