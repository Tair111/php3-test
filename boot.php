<?php 
require_once __DIR__ . '/models/news.php';
require_once __DIR__ . '/controllers/NewsController.php';

function __autoload($classes)
{
	$arClassDirs = array("classes", "contollers", "model");
	foreach($arClassDirs as $folder)
	{
		$classPath = __DIR__ . "/" .$folder. "/" .$classes. ".php";
		
		if(is_readable($classPath))
		{
			require $classPath;
			break;
		}
	}
}