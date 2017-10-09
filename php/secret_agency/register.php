<?php require_once 'db.py'; ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Deep Secret Agency</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
		  <div class="navbar-brand">DSA - Deep Secret Agency</div>
		</div>
	</nav>
	<div class="container">
		<?php
		if($_POST) {
			$db = db_connect();
			$stmt = $db->prepare(
				'INSERT INTO `users` (`name`, `passwd`) VALUES (?, ?);'
			);
			$hash = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
			$stmt->execute([$_POST['user'], $hash]);
			header('Location: login.php');
			die;
		}
		?>
		<form action="register.php" method="POST">
			<h1>Register</h1>
	  	<label for="user">Username:</label>
			<input type="text" id="user" name="user"><br>

			<label for="passwd">Password:</label>
			<input type="password" id="passwd" name="passwd"><br>

	  	<input type="submit" value="Register" class="button">
		</form>
	</div>	
	<script src="/js/jquery-3.2.0.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
