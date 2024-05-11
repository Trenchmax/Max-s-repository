<?php
require_once 'connect.php';
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}

?>

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
    <?php
    $sql = "SELECT * FROM users";
    $results = mysqli_query($conn, $sql);
    if ($results):

        $users = mysqli_fetch_all($results, MYSQLI_BOTH);

        ?>
        <?php
        if (isset($_SESSION['admin'])):
            ?>
            <h3 style="display: block;">xin chào
                pc08550
            </h3>
            <a class="btn btn-primary position-absolute top-0 end-0" href="logout.php">Đăng xuất</a>

            <?php
        else:
            ?>
            <h3 style="display: none;">xin chào
                pc08550
            </h3>

            <a class="btn btn-primary position-absolute top-0 end-0" href="login.php">Đăng nhập</a>

            <?php
        endif;
        ?>
        <a class="btn btn-success mt-5" href="add.php">Thêm </a>

        <table class="table table-striped">

            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">email</th>
                <th scope="col">Chi tiết</th>

                <th scope="col">Sửa</th>

                <th scope="col">Xóa</th>

            </tr>
            <?php
            foreach ($users as $user):

                ?>

                <tr>
                    <td>
                        <?= $user['user_id'] ?>
                    </td>
                    <td>
                        <?= $user['name'] ?>
                    </td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td><a href="detail.php?id=<?= $user['user_id'] ?>">xem chi tiết</a></td>
                    <td><a href="update.php?id=<?= $user['user_id'] ?>">Sửa </a></td>
                    <td><a href="delete.php?id=<?= $user['user_id'] ?>">Xóa</a></td>


                </tr>
                <?php
            endforeach;
            ?>
        </table>
        <?php
        // kết thúc lặp
    else:
        echo "" . mysqli_error($conn);
    endif;


    ?>

    <?php



    ?>

</body>

</html>
