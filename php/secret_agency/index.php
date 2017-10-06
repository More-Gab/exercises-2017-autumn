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
		  <div class="navbar-brand">
				DSA - Deep Secret Agency
			</div>
		</div>
	</nav>
	<div class="container">
		<?php
			$db = db_connect();
			$stmt = $db->prepare('SELECT * FROM `messages`;');
			$stmt->execute();
			$msgs = $stmt->fetchAll();
		?>
		<?php foreach($msgs as $msg): ?>
			<div class="msg">
				<div class="msg-head">
					<?php echo $msg['user']?> (level: <?php echo $msg['level']?>)
				</div>
				<div class="msg-body">
					<?php echo $msg['text']?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>	
	<script src="/js/jquery-3.2.0.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
