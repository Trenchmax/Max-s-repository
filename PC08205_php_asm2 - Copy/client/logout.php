<?php
//Session là một cách để lưu trữ thông tin ở một thời gian nhất định
session_start();
//Xóa tất cả các biến được lưu trữ tỏng session
session_unset();
header('location:login.php');
