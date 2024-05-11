<?php 
    include 'header.php';
?>

<link rel="stylesheet" href="../assets/client/css/style5.css">
<div class="container">
        
        <div class="brand-title">Đăng Nhập</div>
        <form>
            <div class="form-group">
                <label>EMAIL</label>
                <input class="form-control2" type="email" placeholder="example@test.com" id="email" />
                <span class="invalid-span" id="invalid-email" style="display: none;">Vui lòng nhập email</span>
                <label>Mật khẩu</label>
                <input class="form-control2" type="password" placeholder="Min 6 charaters long" id="password" />
                <span class="invalid-span" id="invalid-password" style="display: none;">Vui lòng nhập password</span>
                <button type="button" class="btn-t" onclick="login()">Đăng nhập</button>
            </div>
        </form>
    </div>


<?php
    include 'footer.php';
?>