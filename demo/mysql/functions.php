<?php include 'db.php';?>
<?php

function renderIdOptions() {
    global $connection;
    $query = 'SELECT * FROM users';
    $result = executeQuery($query);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUser() {
    global $connection;
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $username = mysqli_escape_string($connection,$_POST['username']);
        $password = mysqli_escape_string($connection,$_POST['password']);
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
        executeQuery($query);
    }
}

function deleteUser() {
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
        executeQuery($query);
    }
}

function createUser() {
    if(isset($_POST['submit'])) {
        $username = mysqli_escape_string($connection,$_POST['username']);
        $password = mysqli_escape_string($connection,$_POST['password']);
        $password = encrypt($password);
        
        $query = 'INSERT INTO users(username, password) ';
        $query .= "VALUES ('$username', '$password')";

        executeQuery($query);
    }
}

function getUsers() {
    $query = 'SELECT * FROM users';
    $result = executeQuery($query);
    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}

function executeQuery($query) {
    global $connection;
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('The query was not successfull' . mysqli_error($connection));
    } else {
        echo "The operation was successfull.";
        return $result;
    }
}

function encrypt($password) {
    $hashFomat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashAndSalt = $hashFomat . $salt;
    return crypt($password, $hashAndSalt);
}

?>