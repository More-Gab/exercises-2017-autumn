<?php

class card
{
    public $suit = null;
    public $value = null;

    public function __construct($suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function getSuitImage()
    {
        $images = [
            'http://classes.codingbootcamp.cz/assets/classes/33/colors/hearts.png',
            'http://classes.codingbootcamp.cz/assets/classes/33/colors/spades.png',
            'http://classes.codingbootcamp.cz/assets/classes/33/colors/clubs.png',
            'http://classes.codingbootcamp.cz/assets/classes/33/colors/diamonds.png'
        ];

        return 'http://classes.codingbootcamp.cz/assets/classes/33/colors/'.$this->suit.'.png';
    }

    public function __toString()
    {
        return '
            <div class="card '.$this->suit.' value'.$this->suit.'">
                <div class="left">
                    <span>'.$this->value.'</span>
                    <img src="'.$this->getSuitImage().'">
                </div>

                <div class="center">
                    <span>'.$this->value.'</span>
                    <img src="'.$this->getSuitImage().'">
                </div>

                <div class="right">
                    <span>'.$this->value.'</span>
                    <img src="'.$this->getSuitImage().'">
                </div>
            </div>
        ';
    }
}

$suits = [
    'hearts',
    'clubs',
    'diamonds',
    'spades'
];

$values = [
    'A',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    'J',
    'Q',
    'K'
];

$cards = [];
foreach($suits as $suit)
{
    foreach($values as $value)
    {
        $cards[] = new card($suit, $value);
    }
}

shuffle($cards);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cards</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="deck" class="deck">
        
        <?php $even = false; foreach($cards as $card) : $even = !$even; ?>
            <div class="card_wrapper <?php echo $even ? 'even' : 'odd'; ?>">
                <?php echo $card; ?>
            </div>
        <?php endforeach; ?>

    </div>

    <button onclick="document.getElementById('deck').className = 'deck spread';">spread</button>
    
</body>
</html>