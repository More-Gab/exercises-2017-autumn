<?php

$pdo = new PDO(
    'mysql:dbname=eshop;host=127.0.0.1;charset=utf8',
    'Edward',
    'gP59FcV'
);

$query = "
    SELECT `delivery`.*
    FROM `delivery`
    WHERE `delivery`.`id` = ?;
";

$statement = $pdo->prepare($query);
$statement->execute([81]);