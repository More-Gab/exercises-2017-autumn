<?php

require_once 'match.php';
require_once 'football_match.php';

require_once 'vehicle.php';
require_once 'car.php';
require_once 'horse.php';

$match = new football_match('2017-10-02 18:00:00');

$tomorrows_match = new football_match('2017-10-03 17:45:00');

var_dump($match);

echo 'Match begins at ' . $match->begins_at
    . ' and ends at ' . $match->getEstimatedEnd();


