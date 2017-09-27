<?php

require_once 'lib/db-functions.php';

$messages = [];

// is this create or edit?
if(!empty($_GET['id']))
{
    // it is 'edit'
    // retrieve info about user in some format
    $retrieved_user = get_data($_GET['id']);

    // take that format and change it to a common format
    $user = [
        'id' => $retrieved_user['id'],
        'name' => $retrieved_user['name']
    ];
}
else
{
    // it is 'create'
    // prepare an empty user
    $user = [
        'id' => null,
        'name' => null
    ];
}

// was the form submitted?
if($_POST)
{
    // the form was submitted
    var_dump($_POST);
    
    // update current data with submitted data
    $user = array_merge($user, $_POST);

    // validation of data
    $valid = true;
    if(!$user['name'])
    {
        $messages[] = 'You need to fill in the name';
        $valid = false;
    }

    // is the data valid ?
    if($valid)
    {
        // save the data
        if(!empty($_GET['id']))
        {
            // update if this is 'edit'
            update_data($_GET['id'], $user);
            $id = $_GET['id'];
        }
        else
        {
            // insert if this is 'create'
            $id = insert_data($user);
        }

        // prepare the URL to redirect to
        $url = '?id=' . $id;
        // redirect
        header('Location: ' . $url);
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A well made form</title>
</head>
<body>

    <?php foreach($messages as $message) : ?>

        <div class="message"><?php echo $message; ?></div>

    <?php endforeach; ?>

    <form action="" method="post">

        Name:<br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" placeholder="Put your name here">
        <br>
        <br>
        <input type="submit" value="save">

    </form>
    
</body>
</html>