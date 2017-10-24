<?php

// require all libraries
require_once 'party.php';
require_once 'messages.php';
require_once 'db.php';

// database setup
db::setDatabase('parties');

if(true) // if this is create
{
    $data = new party();
}
else // if this is edit
{
    // TODO
}

if($_POST)
{
    // update data from request
    $data->name = $_POST['name'];
    $data->poll_results = $_POST['poll_results'];

    // validate the data
    $valid = true; // everything is dandy
    if(!$data->name)
    {
        $valid = false; // something went wrong
    }

    if(!$data->poll_results)
    {
        $valid = false; // something went wrong
    }

    if($valid)
    {
        $data->save();
        
        // TODO: inform the user

        // TODO: redirect to edit
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit party</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

    <?php // TODO: output messages ?>
    
    <form action="" method="post">

        <div class="form-group">
            <label for="name_input">Name:</label><br>
            <input type="text" name="name" id="name_input" value="<?php echo htmlspecialchars($data->name); ?>">
        </div>

        <div class="form-group">
            <label for="poll_results_input">Poll results:</label><br>
            <input type="text" name="poll_results" id="poll_results_input" value="<?php echo htmlspecialchars($data->poll_results); ?>">
        </div>

        <div class="form-group">
            <input type="submit" value="save">
        </div>

    </form>

</body>
</html>