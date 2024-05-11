<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MobileStore</title>
    <link rel="stylesheet" href="../assets/client/css/style6.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body>
    <!-- footer -->
    <header id="header">
        <img src="https://livedemo00.template-help.com/woocommerce_49164/wp-content/themes/theme49164/images/logo.png"
            alt="MobileStore" class="img-mennu">
        <ul class="nav-2">
            <li><a class="link-menu" href="index.php">Trang chủ</a></li>
            <li><a class="link-menu" href="about.php">Về chúng tôi</a></li>
            <li><a class="link-menu" href="help.php">hỗ trợ</a></li>
            <li><a class="link-menu" href="contact.php">liên hệ</a></li>
            <li><button class="btn-menu"><a style="padding: 10px;" href="login.php"> Đăng Nhập</a></button></li>
        </ul>
        <div class="search-menu">
            <input class="form-control2" type="text" placeholder="search">
            <i class='bx bx-search'></i>

        </div>
    </header>
    <div class="container card w-50 col-md-6 ml-6 mt-5">
        <div>
            <form action="register-action.php" method="post">
                <h1 class="display-6 text-center">Đăng Ký</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">tên</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">tên người dùng</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ Email</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
              
                <button type="submit" class="btn btn-primary">g</button>
            </form>
        </div>
    </div>



    <?php
    include ("footer.php");
    ?>