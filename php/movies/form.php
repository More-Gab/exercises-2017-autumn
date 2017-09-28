<?php
require_once 'db.php';
require_once 'functions.php';
require_once 'genres.php';

$db = db_connect();
if ($_POST) {
	echo 'Name: ' . htmlspecialchars($_POST['name']);
	echo '<br>';
	echo 'Desc: ' . htmlspecialchars($_POST['description']);
	$stmt = $db->prepare('INSERT INTO movies (name, description, genre) VALUES (:name, :description, :genre)');
	$stmt->execute([
		':description' => $_POST['description'],
		':name' => $_POST['name'],
		':genre' => $_POST['genre'],
	]);
	header('Location: form.php?status=ok');
	exit;
}
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
	echo 'yeah!';
}
?>
<h1>Add a movie</h1>
<a href="movies.php">list</a><hr>
<?php
echo build_form();
