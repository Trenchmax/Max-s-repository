<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'connect.php';

    // Truy vấn lấy dữ liệu từ bảng categories
    $sql = "SELECT * FROM categories";
    $results = mysqli_query($conn, $sql);

    if ($results):
        $categories = mysqli_fetch_all($results, MYSQLI_ASSOC); // Using MYSQLI_ASSOC to fetch associative array
    
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Sửa</th>
                <th>Delete</th>
            </tr>
            <?php
            foreach ($categories as $category):
                ?>
                <tr>
                    <td>
                        <?= $category['category_id'] ?>
                    </td>
                    <td><a href="detail-edit.php?id=<?= $category['category_id'] ?>" target="_blank">
                            <?= $category['name'] ?>
                        </a></td>
                    <td><a href="detail-edit.php?id=<?= $category['category_id'] ?>" target="_blank">
                            <?= $category['status'] ?>
                        </a></td>
                    <td><a href="update.php?id=<?= $category['category_id'] ?>">Sửa</a></td>
                    <td><a href="delete.php?id=<?= $category['category_id'] ?>">Delete</a></td>
                </tr>
                <?php
            endforeach;
            ?>
        </table>
        <?php
    else:
        echo "Error: " . mysqli_error($conn);
    endif;
    ?>
</body>

</html>