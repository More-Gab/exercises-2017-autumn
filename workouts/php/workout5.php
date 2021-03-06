<?php

// 1.
$name = 'James';

// 2.
$name .= ' Bond';

// 3.
$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 25
];

// 4.   The name is Bond. James Bond.
echo 'The name is ' . $bond_info['last_name'] . '. '
    . $bond_info['first_name'] . ' '
    . $bond_info['last_name'] . '.';

// 5. 
// One day when I was driving my Aston Martin in the Alps Stavro Blofeld came along and made me a widower. If only I had my Walther PPK with me!
echo 'One day when I was driving my ' . $bond_info['car'] 
    . ' in the Alps ' . $bond_info['enemy']
    . ' came along and made me a ' . $bond_info['relationship_status']
    . '. If only I had my ' . $bond_info['gun'] . ' with me!';

// 6.
$bond_info['last_case'] = 'Spectre';

// 7.
class bondCase
{
    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    // 10.
    protected $girls = [];

    // 16.
    public static $cases_solved = 0;
    public static $girls_met = 0;

    // 9.
    public function __construct($year)
    {
        $this->year = $year;

        // 17.
        static::$cases_solved++;
        // bondCase::$cases_solved++; // same as above
    }

    // 11.
    public function addGirl($name)
    {
        $this->girls[] = $name;

        // 18.
        static::$girls_met++;
    }

    // 8.
    // get- method for property $name
    public function getName()
    {
        return $this->name;
    }

    // set- method for property $name
    public function setName($value)
    {
        $this->name = $value;
    }

    // get- method for property $year
    public function getYear()
    {
        return $this->year;
    }

    // set- method for property $year
    public function setYear($value)
    {
        $this->year = $value;
    }

    // get- method for property $enemy
    public function getEnemy()
    {
        return $this->enemy;
    }

    // set- method for property $enemy
    public function setEnemy($value)
    {
        $this->enemy = $value;
    }

    // 19.
    public static function getAvgGirlsPerCase()
    {
        return static::$girls_met / static::$cases_solved;
    }
}

// 12.
$spectre = new bondCase(2015);
$spectre->setName('Spectre');
$spectre->setEnemy('Ernst Stavro Blofeld');
// 13.
$spectre->addGirl('Estrella');
$spectre->addGirl('Lucia Sciarra');
$spectre->addGirl('Madeleine Swann');

// 14.
$casino = new bondCase(2006);
$casino->setName('Casino Royale');
$casino->setEnemy('Le Chiffre');

// 15.
$casino->addGirl('Vesper Lynd');
$casino->addGirl('Solange Dimitrios');


$array = [];
// adding items to array
$array[] = 'new item';
$array['new key'] = 'new item';
array_push($array, 'new item as last'); // added as last
array_unshift($array, 'new item as first'); // added as first (numeric keys change)

echo 'On average Bond has met ' . bondCase::getAvgGirlsPerCase() . ' girls per case.';