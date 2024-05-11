<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once 'connect.php';

    // lấy giá trị được truyền vào url 
    $category_id = $_GET['id'];
    // echo "<br>ID:" .$category_id;
    
    // Truy vấn lấy dữ liệu từ bảng categories
    // câu truy vấn sql 
    $sql = "SELECT * FROM categories WHERE category_id=$category_id";
    // kết nối và thực hiện câu truy vấn
    $results = mysqli_query($conn, $sql);

    // kiểm tra kết quả trả về 
    if ($results):
        // MYSQLI_BOTH: lấy cả tên cột và giá trị của nó
        $categories = mysqli_fetch_all($results, MYSQLI_BOTH);
        // echo "<pre>";
        // var_dump($categories);
        // đầu tiên, in ra xem $result trả về cái gì bằng lệnh var_dump,
        // có thể sử dụng echo "<pre>" trước đó để dễ nhìn hơn
    
        // Lấy dòng dữ liệu đầu tiên, hoặc có thể sử dụng foreach như trang list
        $category = $categories[0];
        ?>
        <h1>ID:
            <?= $category['category_id'] ?>
        </h1>
        <h1>Name:
            <?= $category['name'] ?>
        </h1>
        <?php
        // kết thúc lặp
    else:
        echo "" . mysqli_error($conn);
    endif;

    ?>

    <?php



    ?>

</body>

</html>