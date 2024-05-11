<?php
    //tao mang 
    // cach 1 



    $array = array('tao','buoi','dao','hoa');
    var_dump($array);
    echo '<br>';
    print_r($array);
    echo '<br>';


    $thongtin = array('name'=>'hao', 'username'=>'max');
    
    //ngoai tu khoa array ta co the dung ngoac vuong de khai bao mang
   // $thongtin = ['name'=>'hao', 'username'=>'max');]

    var_dump($thongtin);

    //rang gia tri cho mang 

    $thongtin_New['username'] = 'haohahaha';
    var_dump($thongtin_New);
    echo 'username la :' .$thongtin_New['username'] ;
    echo '<br>';
    //goi mang 

    $mang = [
        [0,1,2,3],
        [1,2,3,4],
        [2,3,4,5]
    ];

    var_dump($mang);

    echo $mang[2] [1];
