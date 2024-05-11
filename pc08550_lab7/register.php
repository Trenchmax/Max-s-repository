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
        <h2 class="m-auto">đăng ký</h2>
        <form action="register-action.php" method="post" >
            <div class="mb-3">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ten nguoi dung</label>
                <input type="text" name="username" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">mat khau</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
                <label for="exampleInputEmail1" class="form-label">Dia chi email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ten</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <select class="form-select" name="role" id="role">
                    <option value="0">nguoi dung</option>
                    <option value="1">may chu</option>

                </select>
            </div>
            <div class="mb-3"> 
                <select class="form-select"  name="role" id="role">
                    <option value="0">Ẩn </option>
                    <option value="1">Hiển thị</option>

                </select>
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>