<?php
echo "Bài 1 : Toán tử <br><br>";
echo '$x = (2 == 3)';
$x = (2 == 3);
var_dump($x);
echo "<br>";
echo '$x = (2 != 3)';
$x = (2 != 3);
var_dump($x);
echo "<br>";
echo '$x = (2 <> 3)';
$x = (2 <> 3);
var_dump($x);
echo "<br>";
echo '$x = (2 === 3)';
$x = (2 === 3);
var_dump($x);
echo "<br>";
echo '$x = (2 !== 3)';
$x = (2 !== 3);
var_dump($x);
echo "<br>";
echo '$x = (2 > 3)';
$x = (2 > 3);
var_dump($x);
echo "<br>";
echo '$x = (2 < 3)';
$x = (2 < 3);
var_dump($x);
echo "<br>";
echo '$x = (2 >= 3)';
$x = (2 >= 3);
var_dump($x);
echo "<br>";
echo '$x = (2 <= 3)';
$x = (2 <= 3);
var_dump($x);
echo "<br><br>";
//Bài 2 chuỗi
echo "Bài 2: Chuỗi(string)<br><br>";

$s = "Hello\nWorld <br>";
echo $s;
$s = 'It\'s' . "\n";
echo $s;
echo "<br>\nHello<br>world<br>";
echo "\u{00C2A9}";
echo "\u{C2A9}<br>";
$a = 'Hello';
$$a = 'World';
echo "$a  ${$a}";

echo "<br><br>Bài 3: Viết chương trình tỉnh tổng hai số a và b cho trước<br><br>";
$a = 5;
$b = 2;
$c = $a + $b;

echo "Tổng của $a và $b là :$c";

echo "<br><br>Bài 4: Viết chương trình tính số dư khi số a chia cho 2,3,5,7<br><br>";
$a = 7;
$b = 2;
$c = 3;
$d = 5;
$e = 7;
echo "$a chia cho $b dư: ".$a % $b;
echo "<br><br>";
echo "$a chia cho $c dư: ".$a % $c;
echo "<br><br>";
echo "$a chia cho $d dư: ".$a % $d;
echo "<br><br>";

echo "$a chia cho $e dư: ". $a % $e ;








