<?php

// if (isset($_POST['submit'])) {

//     $name = ['Edwin', 'Student', 'Tobias'];
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $minimum = 5;
//     $maximum = 10;

//     // if (strlen($username) < $minimum) {
//     //     echo 'Username is to short (Minimum is 5 characters)';
//     // } elseif (strlen($username) > $maximum) {
//     //     echo 'Username is too long. (Maximum 10 characters allowed)';
//     // }

//     if (in_array($username, $name)) {
//         echo 'Successfully logged in.';
//     } else {
//         echo 'Could not find the username';
//     }

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>

<form action="login_example.php" method="POST">
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password"><br>
    <input type="submit" value="Login" name="submit">
</form>

</body>
</html>
