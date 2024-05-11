<?php

// var_dump($_POST);
require 'connect.php';

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    if (empty($name) || empty($username) || empty($email) || empty($password)) {
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="add.php"</script>';

    }
}

$sql = "INSERT  INTO users (name, username, email, password ) values ('$name', '$username', '$email', '$password')  ";

$result = mysqli_query($conn, $sql);

if ($result === true) {
    echo 'them roi fen';
    header('location: list.php');
} else {
    echo 'sai roi sao ma them fen';
}


