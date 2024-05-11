<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container w-25 border border-secondary rounded-4 mt-5">
        <h2>sửa</h2>
        <form action="update-action.php" method="post">
            <div class="mb-3">
            <div class="mb-3">
                    <label for="exampleInputPasswo" class="form-label">ID người dùng</label>
                    <input type="number" name="user_id" class="form-control" id="exampleInputPasswo">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPasswo" class="form-label">Tên người dùng</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPasswo">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPasswor" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPasswor">
                </div>
                <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Tên</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword">
            </div>

            <div class="mb-3">
                <select class="form-select" name="role" id="role">
                    <option value="0">Người dùng</option>
                    <option value="1">Máy chủ</option>

                </select>
            </div>
            <div class="mb-3">
                <select class="form-select" name="status" id="status">
                    <option value="0">Ẩn </option>
                    <option value="1">Hiển thị</option>

                </select>
            </div>


            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>