<?php
if (isset($_POST['submit'])) {

    $name = ['Edwin', 'Student', 'Tobias'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    $maximum = 10;

    // if (strlen($username) < $minimum) {
    //     echo 'Username is to short (Minimum is 5 characters)';
    // } elseif (strlen($username) > $maximum) {
    //     echo 'Username is too long. (Maximum 10 characters allowed)';
    // }

    if (in_array($username, $name)) {
        echo 'Successfully logged in.';
    } else {
        echo 'Could not find the username';
    }

}
