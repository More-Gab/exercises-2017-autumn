<?php

if($_POST) // if array $_POST contains any items
{
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $is_alive = $_POST['is_alive'];
    $adversary = $_POST['adversary'];

    if(empty($name))
    {
        die('You must fillin the name');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

    <?php 

    var_dump($_GET);

    var_dump($_POST);

    ?>

    <h1>Supervillains</h1>
    <form action="" method="post">

        <input type="text" name="name" value="">
        <br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="checkbox" value="1" name="is_alive" checked="checked">
        <br>
        <select name="adversary" id="">
            <option value="batman">Batman</option>
            <option value="superman">Superman</option>
        </select>
        <br>
        <input type="submit" value="Save">
    
    </form>
    
</body>
</html>