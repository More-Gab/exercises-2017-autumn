<?php
$product_id = $_GET['product_id']; // some integer
$color = $_GET['color']; // some string
$size = $_GET['size']; // some string
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T-shirt</title>
</head>
<body>
    
    <form action="cart.php" method="post">
    
        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">

        <input type="radio" name="color" value="blue" <?php if($color == 'blue') echo ' checked'; ?>>
        <input type="radio" name="color" value="black" <?php if($color == 'black') : ?>checked<?php endif; ?>>

        <select name="size">
            <option value="XS" <?php if($size == 'XS') echo ' selected'; ?>>XS</option>
            <option value="S" <?php if($size == 'S') echo ' selected'; ?>>S</option>
            <option value="L" <?php if($size == 'L') echo ' selected'; ?>>L</option>
            <option value="XL" <?php if($size == 'XL') echo ' selected'; ?>>XL</option>
            <option value="XXL" <?php if($size == 'XXL') echo ' selected'; ?>>XXL</option>
        </select>

        <select name="size">
            <?php foreach(['XS', 'S', 'L', 'XL', 'XXL'] as $one_size) : ?>
                <option value="<?php echo $one_size; ?>" <?php if($size == $one_size) echo ' selected'; ?>><?php echo $one_size; ?></option>
            <?php endforeach; ?>
            <!--
            <option value="S" <?php if($size == 'S') echo ' selected'; ?>>S</option>
            <option value="L" <?php if($size == 'L') echo ' selected'; ?>>L</option>
            <option value="XL" <?php if($size == 'XL') echo ' selected'; ?>>XL</option>
            <option value="XXL" <?php if($size == 'XXL') echo ' selected'; ?>>XXL</option>
            -->
        </select>

        <input type="text" name="amount" value="">

        <input type="checkbox" name="checkout" value="1">

        <input type="submit" value="submit!">


    </form>

</body>
</html>
