<?php

$days_to_christmas = 90;

while($days_to_christmas > 0) // as long as $days_to_christmas is bigger than 0
{
    // lower the value of $days_to_christmas by 1
    // $days_to_christmas--; 

    // and print out a sentence
    echo 'There are still '.--$days_to_christmas.' days to Christmas<br>';
}

echo 'LOOP ENDED<br>';

$time_served = 0;

while($time_served < 10) 
{
    echo 'The prisoner has served ' . ++$time_served . ' years<br>';
}

$time_served = 10;

do {

    $time_served++;

    echo 'The prisoner has served ' . $time_served . ' years<br>';

} while($time_served < 10);

for($i = 0; $i < 10; $i++) {
    
    echo 'This is the '.($i+1).'. iteration of the loop<br>';

}

for($i = 0; $i < 5; $i++) {

    if($i == 1)
    {
        continue;
    }

    echo 'The prisoner has '. (5-$i) .' more years to serve<br>';

    if($i == 3)
    {
        break;
    }
}