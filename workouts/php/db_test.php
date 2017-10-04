<?php

// require db library
require_once 'db.php';

// write a SQL query
$query = "
    SELECT *
    FROM `country`
    WHERE `country`.`Continent` = ?
";
// run the query
$statement = db::query($query, ['Europe']);
// fetch the results
$data = $statement->fetchAll();

// output the results:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>European countries</h1>
    
    <ul>

        <?php foreach($data as $country) : ?>

            <li><?php echo $country['Name']; ?></li>

        <?php endforeach; ?>

    </ul>

</body>
</html>
