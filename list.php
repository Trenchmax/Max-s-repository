<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
<table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM users ";
        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);

        while ($row = mysqli_fetch_array($query)) {

        ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['user_id'] ?></th>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td> <a href="./chitiet.php?id=<?=$row['user_id']?>">Xem Chi Tiet</a></td>
                </tr>
            <?php
        }

            ?>
            </tbody>
    </table>

    <?php



    ?>

</body>

</html>