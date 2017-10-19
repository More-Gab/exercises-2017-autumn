<?php

$params = [
    'product_id' =>	321,
    'color' => 'blue',
    'size' => 'XL'
];

 
$url = http_build_query($params);
parse_str($url, $parsed_params);
var_dump($parsed_params);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eshop - home</title>
</head>
<body>

    <h1>Home</h1>

    <a href="product.php?product_id=321&color=blue&size=XL">Blue t-shirt (XL)</a>
    <br>
    <a href="q7.php?<?php echo http_build_query($params); ?>">Blue t-shirt (XL)</a>

</body>
</html>