<?php

    // var_dump($_POST);
    require 'connect.php';
    $num = is_int($num);
    $name = $_POST['name'];
    $status = $_POST['status']; 
    if ($name == '') {
        echo "vui long nhap ten ";
    } else if ($status == '') {
        echo "vui long chon lua chon";
    }

    $spl = "INSERT  INTO categories (name, status) value ('$name', '$status')  ";

    $result = mysqli_query($conn, $spl);

     if($result = true) {
        echo 'them roi fen';
     }else {
        echo 'sai roi sao ma them fen';
     }

     
