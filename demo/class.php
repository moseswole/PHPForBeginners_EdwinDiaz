<?php

    class Car {

        function moveWheels() {
            echo 'Wheels were moved';
        }

    }

    if(class_exists('Car')) {
        echo 'Yes';
    }

    if(method_exists('Car', 'moveWheels')) {
        echo 'Yep';
    }

    $mycar = new Car();
    $mycar->moveWheels();

?>