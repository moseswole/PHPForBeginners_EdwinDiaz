<?php

$x = 'outside'; //global

function convert()
{
    global $x;
    $x = 'inside'; //local
}

function saySomething()
{
    echo 'Hello World <br>';
}

function sum($num1, $num2)
{
    echo $num1 + $num2 . '<br>';
}

function multiply($num1, $num2)
{
    return $num1 * $num2;
}

saySomething();
sum(15, 20);

$product = multiply(13, 10);
echo $product . '<br>';

echo $x;
convert();
echo $x;
