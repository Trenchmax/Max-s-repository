<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    require 'connect.php';
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_errno()) {
        echo '' . mysqli_connect_error();
        exit();
    }

    echo 'connected';

    //truy vấn  lấy đữ liệu từ bảng categoris
    $sql = "
        SELECT * FROM categories WHERE status =1
";

    // echo "
    //     <table>
    //         <tr>
    //             <th>ID</th>
    //             <th>Name</th>
    //         </tr>
    //     </table>
    // ";
    $result = mysqli_query($conn, $sql);


    if ($result):
        $categories = mysqli_fetch_all($result, MYSQLI_BOTH);
        // echo "<pre>";
        // var_dump($categories);
    
        $category = $categories[0];




        ?>
        <h1>ID:
            <?= $category['category_id'] ?>
        </h1>
        <h1>name:
            <?= $category['name'] ?>
        </h1>


        <?php



    else:
        echo '' . mysqli_error($conn);

    endif;
    ?>
</body>

</html>