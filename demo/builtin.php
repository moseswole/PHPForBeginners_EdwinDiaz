<?php

// Math
echo pow(2, 7);
echo '<br>';
echo rand(1, 1000);
echo '<br>';
echo sqrt(100);
echo '<br>';
echo ceil(10.3);

// String

$string = 'Hello student, do you like the course?';
echo '<br>';

echo strlen($string);
echo '<br>';
echo strtoupper($string);
echo '<br>';
echo strtolower($string);

// Arrays
$array = [343, 123, 874, 123, 011, 719];

echo '<br>';
echo max($array);
echo '<br>';
echo min($array);

sort($array);
print_r($array);
