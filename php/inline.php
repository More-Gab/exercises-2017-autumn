<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inline PHP</title>

    <style>
.board .row {
    overflow: hidden;
}
.board .row > div {
    float: left;
    width: 3em;
    height: 3em;
}
.board .black {
    background-color: #000000;
}
    </style>
</head>
<body>

    <?php
    // is the current user administrator?
    $user_is_admin = false;
    ?>

    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>

        <?php if($user_is_admin) : ?>
            <li><a href="#">Link just for administrators</a></li>
            <li><a href="#">Another link just for administrators</a></li>
        <?php endif; ?>

    </ul>


    <?php for($i = 0; $i < 10; $i++) : ?>

        <div class="item">
            This is item <?php echo $i+1; ?> of 10.
        </div>

    <?php endfor; ?>


    <?php $names = [
        0 => 'Bruce Wayne', 
        1 => 'Clark Kent', 
        2 => 'Tony Stark', 
        3 => 'Peter Parker'
    ]; ?>

    <?php foreach($names as $nr => $name) : ?>

        <div class="name">
            <?php echo $nr.'. '.$name; ?>
        </div>

    <?php endforeach; ?>

<?php
$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];
?>
    <table>
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
        <tr>

        <?php foreach($vehicles as $name => $speed) : ?>

            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $speed; ?></td>
            </tr>

        <?php endforeach; ?>


    </table>

    <div class="board">

        <?php $odd = true; ?>
        <?php for($i = 0; $i < 8; $i++) : ?>
            <?php $odd = !$odd; ?>

            <div class="row">

                <?php for($j = 0; $j < 8; $j++) : ?>
                    <?php $odd = !$odd; ?>
                    

                    <div class="<?php echo $odd ? 'white' : 'black'; ?>"> 
                    
                        <?php if($i == 4 && $j == 3) : ?>
                            <img src="http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png" alt="White king">
                        <?php endif; ?>
                    
                    </div>
                    
                <?php endfor; ?>

            </div>

        <?php endfor; ?>

    </div>
    <br>
    <div class="board">
        <div class="row">
            <div class="white"></div>
            <div class="black"></div>
        </div>
        <div class="row">
            <div class="black"></div>
            <div class="white"></div>
        </div>
    </div>
    
</body>
</html>