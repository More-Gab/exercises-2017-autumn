<?php

require_once 'var_show.php';

$my_variable = [1,2,3];

var_show($my_variable);

$fruit = [
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
];

var_show($fruit);

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

var_show($fruit_colors);

// create an empty array
$new_array = [];

// add an item into an array with automatic index
$new_array[] = 'new value';

// add an item into an array with specific index
$new_array['my index'] = 'another value';

// overwrite a value with an existing index
$new_array['my index'] = 'yet another value';
$new_array[0] = 'this has been overwritten';

var_show($new_array);

// using values from array (reading from array)
echo 'The value with index 0 is ' . $new_array[0];
echo 'The value with index \'my index\' is ' . $new_array['my index'];
