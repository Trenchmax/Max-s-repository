<?php 
    include 'header.php';
?>

<link rel="stylesheet" href="../assets/client/css/style5.css">
<div class="container ">
        
        <div class="brand-title">Đăng Nhập</div>
        <form action="login-action.php" method="post" >
            <div class="form-group">
                <label>Ten nguoi dung</label>
                <input name="username" class="form-control2" type="text"  id="username" />
                <label>Mật khẩu</label>
                <input name="password" class="form-control2" type="password" placeholder="Min 6 charaters long" id="password" />
                <a href="register.php">Bạn chưa có tài khoản</a>
                <button name="submit" type="submit" class="btn-t" >Đăng nhập</button>
            </div>
        </form>
    </div>


<?php
    include 'footer.php';
?>