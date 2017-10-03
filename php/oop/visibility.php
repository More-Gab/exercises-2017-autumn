<?php

class warehouse
{
    public $name = null;
    protected $nr_of_crates = 0;
    protected $crates = [];

    public function addCrate($contents)
    {
        $this->crates[] = $contents;

        $this->nr_of_crates++;
    }

    // contents passed as one array (using array_merge)
    public function addCrates(array $crates)
    {
        $this->crates = array_merge($this->crates, $crates);

        $this->nr_of_crates += count($crates);
    }

    // contents passed as one array (using foreach)
    public function addCratesForeach(array $crates)
    {
        foreach($crates as $crate)
        {
            $this->crates[] = $crate;
            $this->nr_of_crates++;
        }
    }

    // contents passed as multiple arguments
    public function addCrates2()
    {
        $array_of_arguments = func_get_args();


        $this->crates = array_merge($this->crates, $array_of_arguments);

        $this->nr_of_crates += count($array_of_arguments);
    }

    // get- method for nr_of_crates property
    public function getNrOfCrates()
    {
        return $this->nr_of_crates;
    }

    // get- method for crates property
    public function getCrates()
    {
        return $this->crates;
    }
}

$warehouse1 = new warehouse();
$warehouse1->name = 'Trainyard warehouse';
$warehouse1->addCrate('dusty books');
$warehouse1->addCrate('old records');
$warehouse1->addCrate('time machine');
$warehouse1->addCrate('arc of the covenant');
$warehouse1->addCrates(['dusty books', 'old records', 'time machine', 'arc of the covenant']);
$warehouse1->addCrates2('dusty books', 'old records', 'time machine', 'arc of the covenant', 'dusty books', 'old records', 'time machine', 'arc of the covenant');

$warehouse2 = new warehouse();
$warehouse2->name = 'Docks warehouse';

var_dump($warehouse1);
var_dump($warehouse2);

// var_dump($_SERVER);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visibility</title>
</head>
<body>

    <div class="warehouse">
        <h2><?php echo $warehouse1->name; ?></h2>
        <div>Contains <?php echo $warehouse1->getNrOfCrates(); ?> crates</div>
        <ul>
            
            <?php foreach($warehouse1->getCrates() as $crate) : ?>
                <li><?php echo $crate; ?></li>
            <?php endforeach; ?>
            
        </ul>
    </div>
    
</body>
</html>