<?php 
require __DIR__ . '/Storage.php';

class View extends Storage
{

	public function display($template){
		
		//��������� ���������� ��� ������
		foreach($this as $key=>$value){
				$$key = $value;
		}
		
		//������������ HTML � ������; 
		ob_start();
		require $template;
		return ob_end_clean;
	}
}