<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #btn {
            background-color: blue;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        $dangnhap = true;
        if($dangnhap) {
            echo "<button>Dang</button>";

        }elseif($dangnhap) {
            echo "<button>Dang</button>";

            echo "<button>Dang</button>";

        }
    ?>
    <?php
    $dangnhap = true;
    if ($dangnhap) :
    ?>
        <button type="button" id="btn">Dang xuat</button>
    <?php
    endif;
    ?>

    <?php
        $dangxuat = false;
        $dangnhap = true;
        
        if ($dangnhap) {
           echo "<button type=\"button\" id=\"btn\">dang nhap</button>";
        }elseif ($dangxuat) {  
            echo "<button type=\"button\" id=\"btn\">Dang xuat</button>";

         } 
    ?>

    <?php 
       $dangnhap = false;
       $dungtaikhoan = true;
       if ($dangnhap || $dungtaikhoan) :
    ?>
        <button type="button" id="btn">Dang xuat</button>
        <?php
        else :
        ?>
        <button type="button" id="btn">Dang nhap</button>

    <?php
    endif;
    ?>


    <?php
    $x = 10 ;
    $y = ($x == 1 ) ? 1 : 2;

    if ($x == 1) {
        $y = 1;
    }else {
        $y = 2;
    }

    echo $y;
    ?>
</body>
</html>