<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container w-25 border mt-5">
    <form action="login-action.php" method="post" >
        <h2>Đăng nhập</h2>
        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">ten</label>
            <div class="col-sm-10">
                <input name="username" type="text" class="form-control" id="username">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Mật khẩu</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputPassword3">
            </div>
            <a href="register.php">Ban chua co tai khoan?</a>
        </div>

       
       
                <button name="submit" type="submit" class="btn btn-primary">đăng nhập</button>

        
    </form>
    </div>
</body>

</html>