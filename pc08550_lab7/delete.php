<?php
if (isset($_GET['id'])) {
require ("connect.php");

    $user_id = $_GET['id'];


    $sql = "DELETE FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    if ($result) {
        echo '<script>alert("Thêm thành công ")</script>';
        header("location: list.php");

    } else {
        echo '<script>alert("thêm thất bại ")</script>';

    }
} else {
    echo '<script>alert("lỗi xóa  ")</script>';

    

}