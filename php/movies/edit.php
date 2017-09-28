<?php
require 'genres.php';
require_once 'db.php';
require_once 'functions.php';
$db = db_connect();

if (!isset($_GET['id'])) {
	echo 'no id';
	exit;
}

$stmt = $db->prepare('SELECT * FROM movies WHERE id = ?');
$stmt->execute([$_GET['id']]);
$movie = $stmt->fetch();

echo build_form($movie['name'], $movie['description'], $movie['genre']);

echo '<hr><a href="form.php">add</a> <a href="movies.php">list</a>';
