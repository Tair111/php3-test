<?php 
require __DIR__ . '/Storage.php';

class View extends Storage
{

	public function display($template){
		
		//Установка параметров для шаблон
		foreach($this as $key=>$value){
				$$key = $value;
		}
		
		//Формирование HTML в строку; 
		ob_start();
		require $template;
		return ob_end_clean;
	}
}