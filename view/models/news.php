<?php

require_once __DIR__ . '/../functions/db.php';

function News_getOne($id) {
    return DBQuery("
    SELECT * FROM news WHERE id=$id
    ");
}

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

function News_setArticle($_title,$_text) {
    return DBExec("
    INSERT INTO news (title,text) VALUES ('$_title','$_text')
    ");
}

function News_editArticle($id, $new_title, $new_text) {
    return DBExec("
    UPDATE news SET title='$new_title',text='$new_text' WHERE id='$id'
    ");
}

function News_count(){
    return DBQuery("
    SELECT COUNT(*) AS count FROM news;
    ");
}

function News_delArticle($id) {
	return DBExec("
	DELETE FROM news WHERE id='$id'
	");
}
