<?php

$movies = [
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
];

arsort($movies);

$movie_names = [
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
];
$movie_ratings = [
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
];

// ksort($movie_names);

$sorting_way = 'asc'; // default value
if(isset($_GET['sort'])) // if 'sort' is found in URL
{
    $sorting_way = $_GET['sort']; // $sorting_way set to it's value
}

if($sorting_way == 'asc')
{
    // sort in ascending order
    asort($movie_ratings);
}
else // $sorting_way is 'desc' (unless there are more possibilities)
{
    // sort in descending order
    arsort($movie_ratings);
}


$messages = [
  'error' => [
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ],
  'warning' => [
    'This is your first warning',
    'This is your final warning'
  ],
  'success' => [
    'Finally, something was successful.'
  ],
];

$messages['error'][] = 'A new error';
$messages['error']['some key'] = 'Another error';

$messages['error'][2] = 'CHANGED MESSAGE';

$messages[0] = [];
$messages[0][] = 'abc';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays #2</title>

    <style>
.message, .info, .success, .warning, .error {
  padding: 0.5em 1em;
  background-color: #cccccc;
  border: 1px solid #666666;
  margin-bottom: 0.25em;
  background: #cccccc url("http://classes.codingbootcamp.cz/assets/classes/8/info.png") 1em center/1em auto no-repeat scroll;
  background-image: url("http://classes.codingbootcamp.cz/assets/classes/8/info.png");
  background-position: 1em center;
  background-size: 1em auto;
  background-repeat: no-repeat;
  background-attachment: scroll;
  padding-left: 3em; }

.info {
  background-color: #BAE7EC;
  border-color: #87b4b9; }

.success {
  background-color: #BBECBA;
  border-color: #88b987;
  background-image: url("http://classes.codingbootcamp.cz/assets/classes/8/success.png"); }

.warning {
  background-color: #ffce9e;
  border-color: #cc9b6b;
  background-image: url("http://classes.codingbootcamp.cz/assets/classes/8/warning.png"); }

.error {
  background-color: #ff9e9e;
  border-color: #cc6b6b;
  background-image: url("http://classes.codingbootcamp.cz/assets/classes/8/error.png"); }

    </style>
</head>
<body>

    <ol>
        <?php foreach($movies as $key => $title) : ?>

            <li>
                <?php echo $title; ?>
                
            </li>

        <?php endforeach; ?>
    </ol>

    <?php var_dump($movies); ?>

    <ol>
        <?php $nr_of_movies = count($movies); // for efficiency, don't count in every iteration ?>
        <?php for($i = 0; $i < $nr_of_movies; $i++) : ?>

            <li>
                <?php echo $movies[$i]; ?>
            </li>

        <?php endfor; ?>
    </ol>

<!--
For each movie from $movie_names, print a <li> with the movie's name.
Inside each such list item, PICK THE RIGHT RATING from the $movie_ratings
and print it as well
-->
    <ol>
        
        <?php foreach($movie_names as $id => $name) : ?>

            <li>
                <?php echo $name; ?>
                (<?php echo $movie_ratings[$id]; ?>)
            </li>

        <?php endforeach; ?>

    </ol>
    
    <nav>
        <a href="?sort=asc#list_by_rating">ascending</a>
        <a href="?sort=desc#list_by_rating">descending</a>
    </nav>


    <ol id="list_by_rating">
        
        <?php foreach($movie_ratings as $id => $rating) : ?>

            <li>
                <?php echo $movie_names[$id]; ?>
                (<?php echo $rating; ?>)
            </li>

        <?php endforeach; ?>

    </ol>


    <div class="messages"> <!-- wrapper (not required) -->
    
        <?php foreach($messages as $message_type => $messages_of_type) : ?>

            <?php foreach($messages_of_type as $message) : ?>

                <div class="message <?php echo $message_type; ?>"><?php echo $message; ?></div>
            
            <?php endforeach; ?>

        <?php endforeach; ?>

    </div>



    <?php echo str_repeat('<br>', 100); // just to make the page long ?>

</body>
</html>
