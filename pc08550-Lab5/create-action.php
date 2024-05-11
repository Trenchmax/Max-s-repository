<?php

// var_dump($_POST);
require 'connect.php';

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($name == '') {
    echo "vui long nhap ten ";
} else if ($username == '') {
    echo "vui long chon lua chon";
} else if ($email == '') {
    echo "vui long chon lua chon";
} else if ($password == '') {
    echo "vui long chon lua chon";
}

$spl = "INSERT  INTO users (name, username, email, password ) values ('$name', '$username', '$email', '$password')  ";
var_dump($spl);
$result = mysqli_query($conn, $spl);

if ($result === true) {
    echo 'them roi fen';
} else {
    echo 'sai roi sao ma them fen';
}


