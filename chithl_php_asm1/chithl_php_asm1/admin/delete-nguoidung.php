<?php
if (isset($_GET['id'])) {
require ("connect.php");

    $user_id = $_GET['id'];


    $sql = "DELETE FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    var_dump($sql);
    if ($result) {
        echo '<script>alert("xóa thành công ")</script>';
        header("location: nguoidung-ds.php");

    } else {
        echo '<script>alert("xóa thất bại ")</script>';

    }
} else {
    echo '<script>alert("lỗi xóa  ")</script>';

    

}