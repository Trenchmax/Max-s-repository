<?php


require 'connect.php';
$user_id = $_POST['user_id'];
$name = $_POST['name'];
// $password = $_POST['password'];
// $email = $_POST['email'];
$username = $_POST['username'];
$status = $_POST['status'];

if (isset($_POST['submit'])) {
    if ( empty($user_id) || empty($name) ||   empty($username)) {
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="update-nguoidung.php"</script>';

    }
}

//Câu truy vấn
$sql = "UPDATE users SET name = '$name',username ='$username',status= '$status' WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
var_dump($sql);
//Kiểm tra kết quả thêm
if ($result === true) {
    echo 'them roi fen';
    header('location: nguoidung-ds.php');
} else {
    echo 'sai roi sao ma them fen';
}