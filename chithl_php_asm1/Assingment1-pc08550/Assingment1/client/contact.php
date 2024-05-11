<?php
include "header.php";
?>
<link rel="stylesheet" href="../assets/client/css/style4.css">
<div class="content-form">
            <div class="containers">
                <div class="brand-logo"></div>
                <div class="brand-title">Liên hệ</div>

                <form class="box-form">
                    <div class="form-group">
                        <br><br>
                        <label for="fullname" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Nhập vào họ và tên">
                        <label for="form-email" class="form-label">EMAIL</label><br>
                        <input type="email" id="form-email" class="form-control" placeholder="example@test.com">
                        <label for="form-number" class="form-label">Số điện thoại</label>
                        <input type="number" id="form-number" class="form-control" placeholder="+84">
                        <label for="form-feedback" class="form-label">Tin nhắn</label><br>
                        <textarea class="text-feedback" name="feedback" id="form-feedback" cols="30" rows="10"
                            placeholder="Viết vào đây lời nhắn"></textarea>
                        <button class="btn">Gửi</button>
                    </div>


                </form>
            </div>
        </div>

<?php
include "footer.php";
?>