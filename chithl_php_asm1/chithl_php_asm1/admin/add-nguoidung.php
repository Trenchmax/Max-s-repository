<?php

// var_dump($_POST);
require 'connect.php';

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$username = $_POST['username'];
$status = $_POST['status'];
if (isset($_POST['submit'])) {
    if (empty($name)) {
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="nguoidung-ds.php"</script>';

    }
}

$sql = "INSERT  INTO users (name, password, email, username, status ) values ('$name','$password','$email','$username', '$status')  ";

$result = mysqli_query($conn, $sql);

if ($result === true) {
    echo 'them roi fen';
    header('location: nguoidung-ds.php');
} else {
    echo 'sai roi sao ma them fen';
}


