<?php

$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];

// a wizard is never late
$party['gandalf'] = 'Gandalf the Grey';

// off to Rivendell
unset($party['bilbo']);

// have you been eavesdropping?
$party['sam'] = 'Samwise Gamgee';

// go read something in Gondor
unset($party['gandalf']);

function leave_hobbiton()
{
    global $party;

    $party = array_merge($party, [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
}

leave_hobbiton();

function go_to_bree($party)
{
    // I know what's hunting you...
    $party['strider'] = 'Strider';

    return $party;
}

$party = go_to_bree($party);

function go_to_weathertop(& $party)
{
    $party = array_merge($party, [
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
    ]);
}

go_to_weathertop($party);

function meet_arwen(& $party)
{
    // Frodo, don't give up!
    $party['arwen'] = 'Arwen Undómiel';

    array_splice($party, -10, 9);
}

meet_arwen($party);

function go_to_rivendell()
{
    global $party;

    unset($party['arwen']);

    $party = array_merge($party, [
        'gandalf' => 'Gandalf the Grey',
        'boromir' => 'Boromir',
        'legolas' => 'Legolas',
        'gimli' => 'Gimli'
    ]);

    $party['strider'] = 'Aragorn';
}

go_to_rivendell();

function go_to_moria($party)
{
    // run you fools!
    unset($party['gandalf']);

    return $party;
}

$party = go_to_moria($party);

function go_to_falls_of_rauros(& $party)
{
    $party = array_merge($party, array_fill(0, 1000, 'Orc'));

    unset($party['boromir']);
}

go_to_falls_of_rauros($party);

echo nl2br(var_export($party, true));
