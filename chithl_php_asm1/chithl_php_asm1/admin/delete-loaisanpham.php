<?php
if (isset($_GET['id'])) {
require ("connect.php");

    $category_id = $_GET['id'];


    $sql = "DELETE FROM categories WHERE category_id = $category_id";
    $result = mysqli_query($conn, $sql);
    var_dump($sql);
    if ($result) {
        echo '<script>alert("xóa thành công ")</script>';
        header("location: loaisanpham-ds.php");

    } else {
        echo '<script>alert("xóa thất bại ")</script>';

    }
} else {
    echo '<script>alert("lỗi xóa  ")</script>';

    

}