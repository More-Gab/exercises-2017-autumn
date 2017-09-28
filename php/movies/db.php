<?php
function db_connect()
{
	$db = new PDO('mysql:host=localhost;dbname=bootcamp_movies;charset=utf8', 'bootcamp', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $db;
}
