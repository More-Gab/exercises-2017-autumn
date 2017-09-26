Here is the form

<form action="" method="post">

    <?php foreach($items as $i => $text) : ?>

        <br>
        <input type="text" value="<?php echo htmlspecialchars($text); ?>" name="item[<?php echo $i; ?>]">

    <?php endforeach; ?>

    <br>
    <input type="text" value="" name="item[<?php echo count($items); ?>]">

    <br>
    <input type="submit" value="Add">

</form>