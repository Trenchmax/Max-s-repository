<?php
session_start(); //Lưu trữ thông tin tạm thời


//Kiểm tra dữ liệu được gửi từ Form
if (isset($_POST["submit"])) {

    require 'connect.php';
    //Gán biến có trường dữ liệu username từ form gửi đi bằng phương thức POST vào biến $hoten.
    $hoten = $_POST['username'];
    $password = $_POST['password'];

    //Câu truy vấn
    $sql = "SELECT * FROM khachhang WHERE hoten = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // $hoten: Biến chứa giá trị muốn gán vào tham số đầu tiên
    // $password: Biến chứa giá trị muốn gán vào tham số thứ hai 
    mysqli_stmt_bind_param($stmt, "ss", $hoten, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); // Kết quả từ câu lệnh Select


    // Kiem tra ket qua login
    if (mysqli_num_rows($result) > 0) {
        //$_SESSION['admin'] = $username;
        $row = $result->fetch_assoc();
        $username = $row['hoten'];
        $_SESSION['username'] = $hoten;
        //echo " Đăng nhập thành công";
        echo '<script>alert("Đăng nhập thành công")</script>';
        header("location: index.php");
        //echo '<script>location.href="index.php"</script>';
    } else {
        echo " Thông tin đăng nhập không chính xác";
    }
} else {
    echo " Không có post";
}
