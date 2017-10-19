<?php

$message = 'I love coding';

$length = strlen($message);

// The length of the message 'I love coding' is 13
echo 'The length of the message \'' . $message . '\' is ' . $length;

echo "The length of the message '" . $message . "' is " . $length;

echo "The length of the message '{$message}' is {$length}";