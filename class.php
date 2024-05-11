<?php

class sinhVien
{

    public $username;
    public $password;


    function __construct($username = null , $password = '256'){
            $this->username=$username;
            $this->password=$password;      


    }


    function getData()
    {
      echo $this->username,$this->password;
    }


    function login($username, $password)
    {
        if ($username == $this->username && $password == $this->password) {
            echo '<script>alert("dang nhap thang cong");</script>';
        } else {
            echo '<script>alert("dang nhap that bai");</script>';

        }


    }
}




$sv = new sinhVien(password: '333');

$sv->getData();
$sv->login('haohaha', '123');


$x=1<=>1;

echo $x;

    ?>