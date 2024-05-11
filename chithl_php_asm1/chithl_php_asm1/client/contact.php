<?php
include "header.php";
if (isset($_SESSION['admin']) !== true) {
    header("location: login.php");
    exit;
}
?>
<link rel="stylesheet" href="../assets/client/css/style4.css">
<div class="content-form">
            <div class="containers">
                <div class="brand-logo"></div>
                <div class="brand-title">Liên hệ</div>

                <form class="box-form" action="contact-action.php" method="post">
                    <div class="form-group">
                        <br><br>
                        <label for="fullname" class="form-label">Tên</label>
                        <input type="text" class="form-control" name="name" id="fullname" placeholder="Nhập vào họ và tên">
                        <label for="form-email"  class="form-label">EMAIL</label><br>
                        <input type="email" name="email" id="form-email" class="form-control" placeholder="example@test.com">
                        <label for="form-number" class="form-label">Số điện thoại</label>
                        <input type="number" name="phone" id="form-number" class="form-control" placeholder="+84">
                        <label for="form-feedback" class="form-label">Tin nhắn</label><br>
                        <textarea class="text-feedback" name="message" id="form-feedback" cols="30" rows="10"
                            placeholder="Viết vào đây lời nhắn"></textarea>
                        <button name="submit" type="submit" class="btn">Gửi</button>
                    </div>


                </form>
            </div>
        </div>

<?php
include "footer.php";
?>