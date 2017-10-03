<?php

class dog
{
  public $color = 'unspecified';

  public static $nr_of_dogs = 0;

  public function bark()
  {
    echo "WOOF!";
  }

  public static function get_nr_of_dogs()
  {
    return dog::$nr_of_dogs;
  }

  public function __construct()
  {
    dog::$nr_of_dogs++;
  }

  public function __destruct()
  {
      dog::$nr_of_dogs--;
  }
}

$my_dog = new dog(); // dog::$nr_of_dogs increased by 1
$your_dog = new dog();

unset($my_dog);

// because it's public I can access the static property from anywhere
echo dog::$nr_of_dogs;