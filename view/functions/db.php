<?php

function config()
{
    return include __DIR__ . '/../config.php';
}

function DBConnect()
{
    $config = config();
    mysql_connect(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['password']
    ) or die('No connect with date base' . mysql_error());
    mysql_select_db($config['db']['dbname']) or die('No select date base'. mysql_error());
}

function DBQuery($sql)
{
    DBConnect();
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

function DBExec($sql)
{
    DBConnect();
    $res = mysql_query($sql);
    if (!$res) {

        echo mysql_error();
        return false;
    }
    return true;
}