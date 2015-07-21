<?php


require_once __DIR__ . '/boot.php';


$view = new View;
$conteyner = new News;
$view->news = $conteyner->selectArticleAll();
$view->display('view/index.php');


/*if(isset($_GET['route'])){
	$route = $_GET['route'];
	$routeParts = explode('/', $route);
	$controllerClassName = ucfirst($routeParts['0']. 'Controller');
	$actionName = $routeParts['1'];
}else{
	$controllerClassName = 'NewsController';
	$actionName = 'all';
}

$controller = new $controllerClassName;
$controller->action($actionName);
*/