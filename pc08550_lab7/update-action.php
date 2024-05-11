<?php


require 'connect.php';

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$name = $_POST['name'];
$role = $_POST['role'];
$status = $_POST['status'];

if (isset($_POST['submit'])) {
    if ( empty($user_id) || empty($name) || empty($username) || empty($email) || empty($password)) {
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="add.php"</script>';

    }
}

//Câu truy vấn
$sql = "UPDATE users SET username= '$username', password= '$password', email= '$email', name= '$name', status= '$status' WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);

//Kiểm tra kết quả thêm
if ($result) {
    //echo "Update thanh cong ne";
    //chuyển hướng về trang danh sách
    header('location: list.php');
} else {
    "Loi roi nha!! Hay thu lai";
}