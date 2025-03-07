<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* style.css */

        .container {
            width: 30%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #666;
            font-size: 16px;
        }

        .back-link {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>


<body>
    <?php
    // Kết nối cơ sở dữ liệu
    require_once './connect.php';
    // Kiểm tra xem ID đã được truyền qua URL chưa
    if (isset($_GET['id'])) {
        $id_khachhang = $_GET['id'];

        // Truy vấn để lấy thông tin của khachhang có ID tương ứng
        $sql = "SELECT * FROM khachhang where id_khachhang=$id_khachhang";
        $result = mysqli_query($conn, $sql);

        //Kết quả trả về
        if ($result) {
            $khachhang = mysqli_fetch_assoc($result);
    ?>
            <div class="container">
                <h1>Thông tin chi tiết</h1>
                <p>Họ tên: <?= $khachhang['hoten'] ?></p>
                <p>Sđt: <?= $khachhang['sđt'] ?></p>
                <p>Password: <?= $khachhang['password'] ?></p>
                <p>Địa chỉ: <?= $khachhang['diachi'] ?></p>
                <p>Email: <?= $khachhang['email'] ?></p>
                <a style="margin:0px auto" href="../admin/khachhang.php" class="back-link">Quay lại danh sách</a>
        <?php
        } else {
            echo "Không truy cập được người dùng.";
        }
    } else {
        echo "ID của người dùng không được cung cấp.";
    }
        ?>
            </div>
</body>

</html>