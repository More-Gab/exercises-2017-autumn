<?php

require_once 'user.php';
require_once 'blog_post.php';

// the next created user object will get this id
$next_user_id = 0;

$steve = new user('Steve'); // $steve->__construct();
// $steve->dumpMe();

$bob = new user('Richard');

$stuart = new user('Stewie');

// var_dump($steve);
// var_dump($bob);
// var_dump($stuart);

$next_post_id = 0;
$all_posts = [];
$posts_per_user = [];

$first_post = new blog_post(1);
$second_post = new blog_post($stuart->id, 'My first post');

new blog_post($stuart->id, 'Another post');

new blog_post($stuart->id, 'My final testament');

// var_dump($first_post);
// var_dump($second_post);

$first_post->publish();
$second_post->publish();
$first_post->publish();


$nr_of_stuarts_posts = $stuart->getNumberOfPosts();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construction & destruction</title>
</head>
<body>

    User <?php echo $stuart->username; ?> has created <?php echo $stuart->getNumberOfPosts(); ?> posts
    
    <?php foreach($all_posts as $post) : ?>

        <?php echo $post; ?>

    <?php endforeach; ?>


    <?php echo $second_post; ?>

</body>
</html>
