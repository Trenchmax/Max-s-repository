<?php

    echo "Bài 1: mảng<br>";

    $color = array("red","green","white") ;
    print_r($color);
    echo "<br>";
    echo $color[0];

    $age = array() ;
    $age[0] = 10;
    $age[1] = 10;
    $age[3] = 10;
    print_r($age);

    echo "<br><br>Bài 2 : Mảng<br><br>";

    $salaries = array(
        
        "mohamad"=> 2000,
        "qadir"=> 1000,
        "zara"=> 500,
    );
    
    echo "salary of mohamad is " .  $salaries['mohamad'] . "<br>" ;
    echo "salary of qadir is " . $salaries["qadir"] ."<br>";
    echo "salary of zara is ". $salaries["zara"] ."<br>";


    echo "Bài 3: constant";
        define('LOCATOR', "/locator");
        define('CLASSES', LOCATOR."/code/classes");
        define('FUNCTIONS', LOCATOR."/code/functions");
        define('USEDIR', LOCATOR."/user");

        


    