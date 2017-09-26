<?php

$page_title = 'Shopping list';

// we initialize $page at a default value
$page = 'home'; 

// we try to find the name of page in URL
if(isset($_GET['page'])) // if there is item with key 'page' in $_GET
{
    // we update the value of $page
    $page = $_GET['page'];
}

// we initialize $items as empty array
$items = [];


if(!empty($_POST['item'])) // if $_POST['item'] is not empty
{
    var_dump($_POST);

    $items = $_POST['item'];
}

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

    <h1><?php echo $page_title; ?></h1>

    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>

    <?php if($page == 'home') : // if the current $page is 'home' ?>

        <?php include 'workout3-home.php'; // include code for home ?>
        
    <?php elseif($page == 'form') : // if the current $page is 'form' ?>

        <?php include 'workout3-form.php'; // include code for form ?>
        
    <?php endif; ?>
    
</body>
</html>