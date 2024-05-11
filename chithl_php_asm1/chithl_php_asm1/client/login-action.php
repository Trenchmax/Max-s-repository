<?php
    
    session_start();
    if (isset($_POST["submit"])) {

        require 'connect.php';


        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);


        if ($result->num_rows) {

            $_SESSION['admin'] = $username;
            // header('location: list.php');
            // echo "thong tin dang nhap thanh cong";
            echo "<script>alert('đăng nhập thành công')</script>";
            header('location: index.php');
            // echo '<script>Location.href="index.php"</script>';


        }else {
            echo "<script>alert('thông tin đâng nhập không chính xác')</script>";
          
            echo '<script>Location.href="login.php"</script>';



        }

    }
    else {
        echo"khong co post";
    }
?>