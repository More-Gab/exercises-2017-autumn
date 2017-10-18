<?php

// require tehe file
require_once 'party.php';
require_once 'db.php';

// create one object of class party
$top09 = new party();

// assign name and poll_results
$top09->name = 'TOP 09' ;
$top09->poll_results = 7.2;


// var_dump($top09);

$query = "
    SELECT *
    FROM `party`
    ORDER BY `party`.`name` ASC
";
$statement = db::query($query);

$all_results = $statement->fetchAll();
var_dump($all_results);

while($result = $statement->fetch())
{
    var_dump($result);
}

