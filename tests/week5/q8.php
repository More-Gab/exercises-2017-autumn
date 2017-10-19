<?php

define('CURRENCY', 'CZK');

function print_price($price)
{
    switch(CURRENCY)
    {
        case 'CZK':
            // $sign = 'Kč';
            return $price . ' Kč';
            break;
        default:
        case 'EUR':
            $sign = '€';
            break;
        case 'USD':
            $sign = '$';
            break;
    }

    return $price . ' ' . $sign;
}

$price = print_price(123);
echo $price;