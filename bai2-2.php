<?php 

echo "bài 1 if else <br><br> ";

$age = 50 ;
if ($age < 30  )
{
    echo  "your age is less than 30! ";

}else if ( $age >30 && $age < 40  )
{
    echo "your age is between 30 and 40";

}
else if ( $age > 40 && $age < 50)
{
    echo "your age is between 40 and 50";
}
else {
    echo  "your age is greater than 50";

}

echo "<br><br>Bài 2: while<br><br> ";

$max  = 0;
echo $i = 0 ;
echo  ",";
echo $j = 1;
echo ",";                            
$result = 0 ;

while ($max < 10 )
{
    $result = $i + $j;

    $i = $j ;
    $j  = $result;

    $max = $max + 1;
    echo $result;
    echo ",";

}


echo "<br><br>Bài 3 foreach<br><br>";

$fruits = array ("apple ","banana","orange","grapes");  
foreach ($fruits as $fruit);
{
    echo $fruit;
    echo "<br />";
}
$employee = array('name' => 'Join Smith' , 'age' => 30 , 'prefession' => ' ');  
foreach ($employee  as $key => $value)

{
    echo sprintf("%s: %s  ", $key, $value);
    echo "<br/>";
}

echo "<br><br>bài 4 : for<br><br>";

echo 'Simple Break';
for($i = 1 ; $i <= 2; $i++){
    echo "\n" . '$i =  ' .$i. ' ';
    for ($j = 1 ; $j <= 5 ; $j++){
        if ($j == 2 ){
            break;
        }
        echo '$j = ' .$j.' ';
    }
}

echo 'Multi-level break';
for($i = 1; $i <=2; $i++){
    echo("\n" .'$i = ' . $i .' ');
    for ($j = 1 ; $j <= 5 ; $j++){
        if ($j == 2 ){
            break 2;
        }
        echo '$j = ' .$j.' ';
    }
}






