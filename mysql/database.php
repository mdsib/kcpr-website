<?php

$link = mysql_connect('localhost', 'eric', 'v3vus9jy');
if (!$link) {
   die('Not connected : ' . mysql_error());
}

$db_selected = mysql_select_db('kcpr', $link);
if(!$db_selected) {
   die('Can\'t use kcpr : ' . mysql_error());
}

$result = mysql_query('SELECT * FROM albums');
if(!$result) {
   die('Invalid query: ' . mysql_error());
}

echo $result;

?>
