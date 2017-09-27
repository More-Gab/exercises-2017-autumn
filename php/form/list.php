<?php

require_once 'lib/db-functions.php';

$items = get_index();

var_dump($items);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>

    <ul>
        <?php foreach($items as $id => $name) : ?>
            <li>
                <?php echo $name; ?>
                <a href="index.php?id=<?php echo $id; ?>">edit</a>
                <a href="detail.php?id=<?php echo $id; ?>">detail</a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>