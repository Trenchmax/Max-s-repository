<?php

// var_dump($_POST);
require 'connect.php';
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {

   

    if (empty($name) || empty($username) || empty($email) || empty($password)) {
        echo '<script>alert("vui lòng không để trống dữ liệu.")</script>';
        header('location: register.php');
    }

    $spl = "INSERT  INTO users (name, username, email, password ) values ('$name', '$username', '$email', '$password')  ";
    var_dump($spl);
    $result = mysqli_query($conn, $spl);

    if ($result) {
        echo 'them roi fen';
        header('location: login.php');

    } else {
        echo 'sai roi sao ma them fen';
    }
}
