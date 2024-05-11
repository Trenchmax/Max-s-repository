<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
</table>

<?php

//thông tin cần kết nối 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'mysql';
$db_name = 'php_lab3';

//câu lệnh kết nối 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    echo '' . mysqli_connect_error();
    exit();
}

echo 'connected';



//truy vấn  lấy đữ liệu từ bảng categoris
