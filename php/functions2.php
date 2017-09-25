<?php

$number_of_errors = 0;

function log_error()
{
    global $number_of_errors;

    $number_of_errors++;
}

log_error();
log_error();
log_error();
log_error();

var_dump($number_of_errors);

$messages = [];

function add_message($text)
{
    global $messages;

    $messages[] = $text;
}

add_message($messages, 'Foo');
add_message($messages, 'Bar');

var_dump($messages); // [0 => 'Foo']
echo '<hr>';

$start_usage = memory_get_usage();

// write code beneath this line

$new_var_1 = str_repeat('abc', 1000);

$new_var_2 = & $new_var_1;
$new_var_2 .= 'abc'; // just to bypass PHP optimization


// ...and above this one

$end_usage = memory_get_usage();

$usage_change = $end_usage - $start_usage;

var_dump($usage_change);

echo '<hr>';

function divmod($number1, $number2, & $remainder)
{
    $remainder = $number1 % $number2;

    return $number1 / $number2;
}

echo divmod(3, 2, $rem); // new variable created 
                         // and passed by reference
echo '<br>' . $rem; // the variable keeps the value
                    // assigned to it within the function


function add_item(& $array, $item, & $count)
{
    // add item into array
    $array[] = $item;

    $count = count($array);
}

$item = 'abc';
$array = [];
$count = 0;
add_item($array, $item, $count);
var_dump($array); // [0 => 'abc']
var_dump($count); // 1

add_item($array, 'def', $count);
var_dump($array); // [0 => 'abc', 1 => 'def']
var_dump($count); // 2

echo '<hr>';

function headline($text_inside, $importance = 1)
{
    return '<h' . $importance . '>' . $text_inside . '</h' . $importance . '>';
}

echo headline('This is H2', 2);
echo headline('Hello, there');

function element($name, $contents, $class = '', $id = '')
{
    return '<' .
        $name .
        ' id="' . $id . '"' .
        ' class="' . $class . '"' .
        '>' . 
        $contents .
        '</' .
        $name .
        '>';
    //return '<'.'p'.' id="my_paragraph"'.' class="p_class"'.'>'.'text inside paragraph'.'</'.'p'.'>';
}

echo element('p', 'text inside paragraph', 'p_class', 'my_paragraph');

echo element('h3', 'Headline 3');