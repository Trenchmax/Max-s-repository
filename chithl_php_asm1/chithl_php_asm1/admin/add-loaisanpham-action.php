<?php

// var_dump($_POST);
require 'connect.php';

$name = $_POST['name'];
$status = $_POST['status'];
if (isset($_POST['submit'])) {
    if (empty($name) ) {
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="add.php"</script>';

    }
}

$sql = "INSERT  INTO categories (name, status ) values ('$name', '$status')  ";

$result = mysqli_query($conn, $sql);

if ($result === true) {
    echo 'them roi fen';
    header('location: loaisanpham-ds.php');
} else {
    echo 'sai roi sao ma them fen';
}


