<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();
$logName =filter_var(trim($_POST['namee']),
    FILTER_SANITIZE_STRING);

$logPass =filter_var(trim($_POST['passw']),
    FILTER_SANITIZE_STRING);


if(mb_strlen($logName)<1||mb_strlen($logName)>30)
{
    echo ' поля  Name должны быть коректно заполнены';
    exit();
}

if (mb_strlen($logPass)<4||mb_strlen($logPass)>60)
{
    echo 'Не допустимая длина password';
    exit();
}

$logPass=md5($logPass."ghtjj");

$mysql=new mysqli('localhost','admin','ei7veeChu4bo','my_db');
$result=$mysql->query("SELECT * FROM `users` WHERE `name`='$logName' AND `password`='$logPass'");
$user=$result->fetch_assoc();

if(count($user)==0)
{
   echo "wrong";
    exit();
}
else
{
    $_SESSION['username']=$logName;
}


if(isset($_SESSION['username']))
{
  echo "done";
}



$mysql->close();





?>