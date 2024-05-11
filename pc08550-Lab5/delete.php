<?php
require ("connect.php");
if (isset($_get['id'])) {
    $category_id = $_GET['id'];


    $sql = "DELETE FROM categories WHERE category_id = $category_id";
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