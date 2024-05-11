<?php
require ("connect.php");

if (isset($_POST["submit"])) {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $status = $_POST['status'];

    if (empty($name) || empty($price) || empty($description)) {
        # code...
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="create.php"</script>';

    }



    $sql = "UPDATE products SET name = '$name',price= '$price',description ='$description',category_id ='$category_id',status= '$status' WHERE product_id = $product_id";


    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("sửa sản phẩm thành công.")</script>';
        echo '<script>location.href="sanpham-ds.php"</script>';


    } else {
        echo '<script>alert("sửa sản không phẩm thành công.")</script>';
        echo '<script>Location.href="update-sanpham.php"</script>';

    }

}
?>