<?php

class computer
{
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = 'off';

    public function switchOff()
    {
        $this->status = 'off';
    }

    public function toggleSwitch()
    {
        // version 1 (ternary operator):
        $this->status = $this->status == 'off' ? 'on' : 'off';

        // version 2:
        // if($this->status == 'off')
        // {
        //     $this->status = 'on';
        // }
        // else
        // {
        //     $this->status = 'off';
        // }
    }
}


$my_computer = new computer();

$my_computer->model = 'Lenovo Yoga';
$my_computer->operating_system = 'Windows 10';
$my_computer->is_portable = true;
$my_computer->status = 'on';

$my_computer->switchOff();
$my_computer->toggleSwitch();

var_dump($my_computer);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My computer</title>
</head>
<body>
    
    <h1>My computer</h1>
    <table>
        <tr><th>Model:</th><td><?php echo $my_computer->model; ?></td>
        <tr><th>OS:</th><td><?php echo $my_computer->operating_system; ?></td>
        <tr><th>Portable:</th><td><?php echo $my_computer->is_portable ? 'yes' : 'no'; ?></td>
        <tr><th>Status:</th><td>switched <?php echo $my_computer->status; ?></td>
    </table>

</body>
</html>