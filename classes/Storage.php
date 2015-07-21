<?php 

class Storage implements Countable, Iterator
{
	private $data = array();
	
	public function __set($key, $value)
	{
		$this->data[$key] = $value;
	}
	
	public function __get($key)
	{
		if(isset($this->data[$key])){
		return $this->data[$key];
		}else{
		return "null"; 
		}
	}
	
	public function count()
	{
		return count($this->data);
	}
	
	public function current()
	{
		return current($this->data);
	}
	
	public function next()
	{
		return next($this->data);
	}
	
	public function key()
	{
		return key($this->data);
	}
	
	public function valid()
	{
		if(key($this->data) !== null){
			return true;
		}else{
			return false;
		}
	}
	
	public function rewind()
	{
		return reset($this->data);
	}

}

/*
$ob = new Storage();
$ob->foo = '123';
$ob->bar = '456';
$ob->baz = [1, 2, 3];

assert (3 == count($ob));

foreach ($ob as $key => $val){
	echo $key .'='. $val;
	echo '<br/>';
}
*/
