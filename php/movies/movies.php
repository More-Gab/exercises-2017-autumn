<?php
require 'genres.php';
require_once 'db.php';
$db = db_connect();


$stmt = $db->prepare('SELECT * FROM movies');
$stmt->execute();
$movies = $stmt->fetchAll();

echo '<a href="form.php">add</a><hr>';

foreach ($movies as $movie) {
	echo '<strong><em>Movie:</em> ';
	echo htmlspecialchars($movie['name']);
	echo '</strong>';
	echo '<p><em>Plot:</em> ';
	echo htmlspecialchars($movie['description']);
	echo '</p>';
	echo '<strong><em>Genre:</em>';
	echo htmlspecialchars($genres[$movie['genre']]);
	echo '</strong><br>';
	echo '<a href="edit.php?id=' . htmlspecialchars($movie['id']) . '">edit</a>';
	echo '<hr>';
}