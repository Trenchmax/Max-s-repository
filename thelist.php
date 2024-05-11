<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thelist</title>
</head>
<body>
    <?php
    $users = [
        [
                "id"=> "1",
                "username"=> "haothl",
                "password"=> "1111",
                "email"=> "hao@gmail.com",
        ],
        [
                "id"=> "2",
                "username"=> "chithl",
                "password"=> "2211",
                "email"=> "chihao@gmail.com",
        ]
    ];
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>email</th>
        </tr>
        <?php
        foreach ($users as $user) :
        ?>

        <tr>
            <td><?php $user['id']; ?></td>
            <td><?php $user['username']; ?></td>
            <td><?php $user['email']; ?></td>
        </tr>
        <?php 
        endforeach;
        ?>
    </table>
</body>
</html>