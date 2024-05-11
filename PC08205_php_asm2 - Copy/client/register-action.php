<?php
// echo '<pre>';
// var_dump($_POST);

require 'connect.php'; //Kết nối 
echo '<pre>';

//Lấy dữ liệu từ người dùng nhập vào
//Lấy biến có trường dữ liệu là username vào biến $hoten
$hoten = $_POST['username'];
$sđt = $_POST['sđt'];
$password = $_POST['password'];
$diachi = $_POST['diachi'];
$email = $_POST['email'];

//Câu truy vấn
$sql = "INSERT INTO khachhang(hoten,sđt,password,diachi,email) VALUE ('$hoten', '$sđt', '$password', '$diachi', '$email')";
$result = mysqli_query($conn, $sql); //Nhận kết quả

//Kiểm tra kết quả thêm
if ($result == true) {
    echo '<script>alert("Đăng kí thành công")</script>';
    "Đăng kí thành công";
} else {
    "Loi roi nha!! Hay thu lai";
}
//Quay lại trang index
header("location: index.php");
