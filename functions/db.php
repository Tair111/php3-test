<?php

class DBWork
{
		private function config()
	{
		return include __DIR__ . '/../config.php';
	}

	public function __construct()
	{
		$config = $this->config();
		mysql_connect(
			$config['db']['host'],
			$config['db']['user'],
			$config['db']['password']
		) or die('No connect with date base' . mysql_error());
		mysql_select_db($config['db']['dbname']) or die('No select date base'. mysql_error());
	}

	public function DBQuery($sql)
	{
		$res = mysql_query($sql);
		if (!$res) {
			echo mysql_error();
			return [];
		}
		$ret = [];
		while ($row = mysql_fetch_assoc($res))
		{
			$ret[] = $row;
		}
		return $ret;
	}
	
	public function DBQueryOne($sql)
	{
		return $this->DBQuery($sql)[0];
	}

	public function DBExec($sql)
	{
		$res = mysql_query($sql);
		if (false === $res) {
			echo mysql_error();
			return false;
		}
		return true;
	}
}