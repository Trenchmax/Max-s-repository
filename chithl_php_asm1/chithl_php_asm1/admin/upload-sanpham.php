<?php
require ("connect.php");

if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $status = $_POST['status'];

    if (empty($name) || empty($price) || empty($description)) {
        # code...
        echo '<script>alert("vui long nhap vao thong tin ")</script>';
        echo '<script>Location.href="create.php"</script>';

    } else {
        $uploadKo = 1;
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $nameImg = basename($target_file);
        // Check if image file is a actual image or fake image

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {

            $uploadKo = 1;
        } else {
            echo '<script>alert("đây không phải là hình ảnh .")</script>';
            $uploadKo = 0;
        }

    }

    if ($uploadKo == 1) {
        
        $sql = "INSERT INTO products (name, price, description, category_id, status, image) 
    values ('$name', '$price', '$description', '$category_id','$status', '$nameImg') ";
    var_dump($sql);
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("thêm sản phẩm thành công.")</script>';
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            echo '<script>location.href="sanpham-ds.php"</script>';


        } else {
            echo '<script>alert("thêm sản không phẩm thành công.")</script>';
            echo '<script>Location.href="create.php"</script>';

        }
    }
}
?>