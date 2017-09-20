<?php

$html_code = "<h1>My first PHP file</h1>";

echo $html_code;

$first_name = 'Bruce';
$surname = 'Wayne';
$year_of_birth = 1939;
$height = 186;

function dd($value)
{
    // dumps the value of the variable
    var_dump($value); 
    // ends the script
    die();
}

// $first_name = 123;
// dump & die
// dd($first_name);

/*
  this is a comment
*/
// so is this

?>

First name: <?php echo $first_name; ?>
<br>
Surname: <?= $surname; ?><br>
Year of birth: <?= $year_of_birth; ?><br>
Height: <?= $height; ?>

<?php

define('SERVER_SOFTWARE', 'Apache');
define('MY_OS', 'W10');

?>
<br>
My server software is <?php echo SERVER_SOFTWARE; ?> 
and it is running within <?php echo MY_OS; ?>

<br>
<br>
<?php

var_dump($first_name);

// turn string into integer
// $first_name = (integer)$first_name;

// var_dump($first_name);

// turn string into boolean
$first_name = (boolean)$first_name;

var_dump($first_name);

$int_surname = (integer)$surname;
$bool_surname = (boolean)$surname;
$string_surname = (string)$surname;
var_dump($int_surname);
var_dump($bool_surname);
var_dump($string_surname);

$int_yob = (integer)$year_of_birth;
$bool_yob = (boolean)$year_of_birth;
$string_yob = (string)$year_of_birth;
var_dump($int_yob);
var_dump($bool_yob);
var_dump($string_yob);

$int_height = (integer)$height;
$bool_height = (boolean)$height;
$string_height = (string)$height;
var_dump($int_height);
var_dump($bool_height);
var_dump($string_height);



$value = 1;

$value = $value + 1;
$value += 1; // equivalent to that above, $value is now 2

$value *= 4; // value is now 8
$value -= 6; // value is now 2
$value /= 0.5; // value is now 4
$value %= 2; // value is now 0

var_dump($value);

$height_in_in = '72';

$height_in_cm = $height_in_in * 2.54;

?>
<br>
Height in cm: <?php echo($height_in_cm); ?>cm

<?php

$temp_in_celsius = 37;

$temp_in_fahrenheit = (9/5) * $temp_in_celsius + 32;

?>
<br>
Temperature in Fahrenheit: <?php echo $temp_in_fahrenheit; ?> &deg;

<?php

$value = 1;
$value = $value + 1;
$value += 1;
$value++;
++$value;
$value--;
--$value; // the value is 3


$number = 0;
$number++;
var_dump($number);

$number = 0;
var_dump(++$number);
var_dump($number);

$item_number = 1;
?>

<ul>
    <li>This is item number <?php echo ++$item_number; ?></li>
    <li>This is item number <?php echo ++$item_number; ?></li>
    <li>This is item number <?php echo ++$item_number; ?></li>
    <li>This is item number <?php echo ++$item_number; ?></li>
</ul>

<?php

$degrees_in_celsius = 37;

echo ($degrees_in_celsius > 37) ? 'ill' : (($degrees_in_celsius < 35) ? 'ill & cold' : 'healthy');

$number = 47;

// ($number % 2) == 1 == true

echo ($number % 2) ? 'odd' : 'even';

$row_number = 0;
?>

<ul>
    <li class="<?php echo ($row_number % 2) ? 'odd' : 'even'; ?>">First item</li> <?php $row_number++; ?>
    <li class="<?php echo ($row_number % 2) ? 'odd' : 'even'; ?>">Second item</li> <?php $row_number++; ?>
</ul>

<?php

$weekday = 'Tuesday';

echo 'Today is ' . $weekday . ' which is the ' . 2 . 'nd day in the week';

$sentence = 'First name: ' . $first_name . '<br>';

var_dump($sentence);

$year_of_birth = 1982;
$age = 35;
echo 'I was born in '.$year_of_birth.' so today I am '.$age.' years old<br><br>';



$time_of_day = 'afternoon';

if($time_of_day == 'morning')
{
    echo 'Good morning, Vietnam!';
}
elseif($time_of_day == 'afternoon')
{
    echo 'Good afternoon, Vietnam!';
}
else
{
    echo 'Good evening, Vietnam!';
}

$weather = 'windy';

if($weather == 'raining')
{
    echo "Let's stay indoors.";
}
elseif($weather == 'sunny')
{
    echo "Let's put on some sunblock.";
}
elseif($weather == 'windy')
{
    echo "Let's put on a coat.";
}
else
{
    echo 'Let\'s go outside!';
}

$year_of_birth = 1982;

if($year_of_birth >= 1983)
{
    echo 'young';
}
else
{
    echo 'elderly';
}

$height = 162;

if($height >= 180)
{
    echo 'tall';
}
elseif($height >= 160)
{
    echo 'average';
}
else
{
    echo 'small';
}

echo '<br><br>';

$language = 'JavaScript';

switch($language)
{
    case 'PHP':
    case 'Ruby':
        echo 'serverside';
        break;
    case 'JavaScript':
        echo 'clientside';
        break;
    default:
        echo 'I don\'t know';
        break;
}

switch(MY_OS)
{
    case 'W10':
    case 'Windows':
        echo 'Edge';
        break;
    case 'OSX':
        echo 'Safari';
        break;
    case 'Linux':
        echo 'Firefox';
        break;
    default:
        echo 'Just use Chrome';
        break;

}

true;
!true; // === false
!false; // === true

!1; // === false
!0; // === true
!""; // === true
!!1; // === true

$age = 18.5;
$gender = 'male';
$employed = true;

if($age < 25) {}
if($employed) {}
if($age > 34 && !$employed) {}

// not employed: 8 versions
!$employed;
$employed == false;
$employed != true;
$employed == 0;
$employed != 1;
$employed == "";
$employed == [];
$employed == null;

if($age <= 18) {
    echo 'not greater than 18';
}
if($age < 12 && $gender == 'female') {}

if($age >= 18 && !$employed) {}
