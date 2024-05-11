<?php
if (isset($_GET['id'])) {
require ("connect.php");

    $product_id = $_GET['id'];


    $sql = "DELETE FROM products WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql);
    var_dump($sql);
    if ($result) {
        echo '<script>alert("xóa thành công ")</script>';
        header("location: sanpham-ds.php");

    } else {
        echo '<script>alert("xóa thất bại ")</script>';

    }
} else {
    echo '<script>alert("lỗi xóa  ")</script>';

    

}