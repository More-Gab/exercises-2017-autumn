<?php

function greet($whom)
{
    return 'Hello, ' . $whom . '!';
}

$greeting = greet('Jan');
echo $greeting;
echo greet('Universe');
echo greet(greet('sir'));

echo '<br>';
echo "\n";

function print_copyright()
{
    echo '&copy; 2017';
}

print_copyright();

function headline($text)
{
    return '<h1>' . $text . '</h1>';
}

echo headline('Hello');
echo headline('This is my page');