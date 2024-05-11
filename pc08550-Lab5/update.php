<?php
echo "<pre>";
var_dump($_POST);

require 'connect.php';

$category_id = $_POST['category_id'];
$name = $_POST['name'];
$status = $_POST['status'];


//Câu truy vấn
$sql = "UPDATE categories SET name= '$name', status= '$status' WHERE category_id = $category_id";
$result = mysqli_query($conn, $sql);

//Kiểm tra kết quả thêm
if ($result) {
    //echo "Update thanh cong ne";
    //chuyển hướng về trang danh sách
    header('location: list.php');
} else {
    "Loi roi nha!! Hay thu lai";
}