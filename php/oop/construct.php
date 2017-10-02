<?php

require_once 'user.php';

// the next created user object will get this id
$next_user_id = 0;

$steve = new user(); // $steve->__construct();
$steve->dumpMe();

$bob = new user();

$stuart = new user();

var_dump($steve);
var_dump($bob);
var_dump($stuart);



