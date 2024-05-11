<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <?php
    // echo "<br><br>bài 5 : for<br><br>";
    // $products = array('id', 'name', 'price', 'image', 'description');
    
    $products = [
        [
            'id'=> '1',  
            'image'=> '<img src="./img/8934588233074.jpg" alt="" class="list-water">',
            'name'=> 'product 1',
            'price'=> '100000',
            'description'=> 'Lorm ipsum color, sit amet consectetur adipisicing elit',
        ],
        [
            'id'=> '2',
            'image'=> '<img src="./img/nuoc-ngot-revive-vi-muoi-khoang-chai-500ml-201812060918208543.jpg" alt="" class="list-water">',
            'name'=> 'product 2',
            'price'=> '100000',
            'description'=> 'Lorm ipsum color, sit amet consectetur adipisicing elit',
        ],
        [
            'id'=> '3',
            'image'=> '<img src="./img/OIP (5).jpg" alt="" class="list-water">',
            'name'=> 'product 3',
            'price'=> '300000',
            'description'=> 'Lorm ipsum color, sit amet consectetur adipisicing elit',
        ]
    ];
    ?>
    <table>
    
        <tr>
            <th class="th-1" >id</th>
            <th class="th-2">image</th>
            <th class="th-1">name</th>
            <th class="th-1">price</th>
            <th class="last-th" >description</th>
        </tr>
    <?php
    foreach ($products as $product) :
    ?>
        <tr>
            <td><?php echo $product['id'];  ?></td>
            <td><?php echo $product['image'];  ?></td>
            <td><?php echo $product['name'];  ?></td>
            <td><?php echo $product['price'];  ?></td>
            <td><?php echo $product['description'];  ?></td>
        
        </tr>
        <?php
            endforeach;
        ?>
    </table>
</body>
</html>