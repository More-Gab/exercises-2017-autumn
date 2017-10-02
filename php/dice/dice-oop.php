<?php

class dice
{
    public $sides = 6;

    public $number = 1;

    public function __construct($sides = 6)
    {
        $this->sides = $sides;
    }

    public function roll()
    {
        $this->number = rand(1, $this->sides);
    }

    public function __toString()
    {
        return '<div class="dice">'. $this->number .'</div>';
    }
}

// find out if any dice should be rolled
if(!empty($_GET['nr_of_dice']))
{
    $nr_of_dice_to_roll = (int)$_GET['nr_of_dice'];

    // the number of dice must be at least 1 and at the most 100
    $nr_of_dice_to_roll = max(1, min(100, $nr_of_dice_to_roll));
}
else
{
    $nr_of_dice_to_roll = null;
}

// prepare a list of dice
$dice = [];

// if something should be rolled
if($nr_of_dice_to_roll) 
{
    for($i = 0; $i < $nr_of_dice_to_roll; $i++)
    {
        $one_dice = new dice(20);
        $one_dice->roll();
        $dice[] = $one_dice;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rolling dice</title>

    <style>
.dice {
    height: 30px;
    width: 30px;
    display: inline-block;
    text-align: center;
    border: 1px solid black;
    font-size: 24px;
    line-height: 30px;
    margin: 0.25em;
}
    </style>
</head>
<body>
    
    <form action="" method="get">
        <input type="text" name="nr_of_dice" value="<?php echo htmlspecialchars($nr_of_dice_to_roll); ?>" />

        <input type="submit" value="Roll the dice!">
    </form>

    <?php foreach($dice as $one_dice) : ?>

        <?php echo $one_dice; ?>

    <?php endforeach; ?>

</body>
</html>