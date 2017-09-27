<?php

require_once 'lib/db-functions.php';

if(!empty($_GET['id']))
{
    // everything is fine
    $user = get_data($_GET['id']);

    var_dump($user);
}
else
{
    die('You need to access this page with id in URL');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>

    <h1><?php echo $user['name']; ?></h1>

    
</body>
</html>