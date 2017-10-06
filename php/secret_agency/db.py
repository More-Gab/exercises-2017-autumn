<?php
function db_connect()
{
	$db = new PDO('mysql:host=localhost;dbname=martindb;charset=utf8', 'martin', 'jumbotron');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $db;
}
?>