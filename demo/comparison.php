<?php

    /*
    equal ==
    identical ===
    compare > < >= <= <>
    not equal !=
    not identical !==
    */

    $num1 = 5;
    $num2 = 10;
    $str1 = '5';

    if($num1 == $str1) {
        echo 'Yes 1';
    }
    if($num1 === $str1) {
        echo 'Yes 2';
    }
    if($num1 < $num2) {
        echo 'Yes 3';
    }
    if($num1 != $num2) {
        echo 'Yes 4';
    }


?>