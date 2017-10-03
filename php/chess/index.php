<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
body {
    background-color: #c7c7c7;
}
.board {
    display: flex;
    flex-direction: column;
}
.board .row {
    display: flex;
    flex-direction: row;
}
.board .row > div {
    float: left;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;        
}
.board .row > div.dark {
    background-color: darkred;
}
.board .row > div.light {
    background-color: lightblue;
}
.board .row > div img {
    display: inline-block;
    vertical-align: middle;
}
    </style>
</head>
<body>
    
<?php

require 'piece.php';
require 'square.php';
require 'board.php';

// $black_pawn = new piece('p');
// $white_queen = new piece('Q');

// echo $black_pawn;
// echo $white_queen;

// $a2 = new square(1, 2);
// $b2 = new square(2, 2, $white_queen);
// $c2 = new square(3, 2, $black_pawn);
// $d2 = new square(4, 2);
// echo $a2;
// echo $b2;
// echo $c2;
// echo $d2;

$positions = array(1=>array(8=>'r',7=>'p',2=>'P',1=>'R',),2=>array(8=>'n',7=>'p',2=>'P',1=>'N',),3=>array(8=>'b',7=>'p',2=>'P',1=>'B',),4=>array(8=>'q',7=>'p',2=>'P',1=>'Q',),5=>array(8=>'k',7=>'p',4=>'P',1=>'K',),6=>array(8=>'b',7=>'p',2=>'P',1=>'B',),7=>array(8=>'n',7=>'p',2=>'P',1=>'N',),8=>array(8=>'r',7=>'p',2=>'P',1=>'R',),);

$turn1_board = new board($positions);
echo $turn1_board;

$another_board = new board('rnbqkbnr/pp1ppppp/8/2p5/4P3/8/PPPP1PPP/RNBQKBNR w KQkq c6 0 2');
echo $another_board;

?>

</body>
</html>