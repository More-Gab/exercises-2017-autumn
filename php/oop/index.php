<?php

// require the declaration of user class
require_once 'user.php';
// require the declaration of blog_post class
require_once 'blog_post.php';

// create new object of the class user
$steve = new user();

// have a look at $steve object
var_dump($steve);

// create new object of the class blog_post
$first_post = new blog_post();

// have a look at $first_post object
var_dump($first_post);

$steve->id = 1;
$steve->username = 'steve';
$steve->name = 'Stephen';
$steve->sex = 'male';

echo '<br><br>The name of user ' . $steve->id . ' is ' . $steve->name;

// have a look at $steve object
echo '<br><br>';
// var_dump($steve);

$first_post->id = 1;
$first_post->headline = 'The first post';
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->added_at = date('j. n. Y G:i');
$first_post->user_id = 1;
$first_post->status = 'published';

// calling the dumpMe method of user class on object $steve
$steve->dumpMe();

$bob = new user();
$bob->dumpMe();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>

    <style>
body {
    font-family: Tahoma;
}
.posts {
    display: flex;
    margin: 1em;
}
.post {
    padding: 0.5em;
    background-color: #e7e7e7;
}
.post h2 {
    margin: 0 0 0.5em;
}
.post .date {
    font-size: 0.85em;
    color: #777777;
}
.post p {
    padding: 0.5em;
    background-color: #ffffff;
}
    </style>

</head>
<body>
    
    <div class="posts">

        <div class="post">
            <h2><?php echo $first_post->headline; ?></h2>
            <div class="date">Added at: <?php echo $first_post->added_at; ?></div>
            <p><?php echo $first_post->text; ?></p>
        </div>

    </div>

</body>
</html>
