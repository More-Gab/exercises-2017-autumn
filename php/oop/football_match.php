<?php 

class football_match extends match
{
    public $nr_of_players = 22;
    public $length = 90;
    public $halves = [
        '0:0', // 0
        '0:0'  // 1
    ];
    public $nr_offsides = 0;
}