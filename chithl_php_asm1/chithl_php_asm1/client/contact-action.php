<?php

// var_dump($_POST);
require 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if (isset($_POST['submit'])) {
    if (empty($name) || empty($email) || empty($phone) || empty($message))  {
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="nguoidung-ds.php"</script>';

    }


$sql = "INSERT  INTO forms (name, phone, email, message ) values ('$name','$phone','$email','$message')  ";

$result = mysqli_query($conn, $sql);

if ($result === true) {
    echo 'them roi fen';
    echo '<script>alert("gui thanh cong ")</script>';

    header('location: contact.php');
} else {
    echo 'sai roi sao ma them fen';
}

}
