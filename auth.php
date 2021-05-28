<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();
$name =filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

$pass =filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);


if(mb_strlen($name)<1||mb_strlen($name)>30)
{
    echo ' поля  Name должны быть коректно заполнены';
    exit();
}

if (mb_strlen($pass)<4||mb_strlen($pass)>60)
{
    echo 'Не допустимая длина password';
    exit();
}

$pass=md5($pass."ghtjj");

$mysql=new mysqli('localhost','admin','ei7veeChu4bo','my_db');
$result=$mysql->query("SELECT * FROM `users` WHERE `name`='$name' AND `password`='$pass'");
$user=$result->fetch_assoc();

if(count($user)==0)
{
   echo "wrong";
    exit();
}
else
{
    $_SESSION['username']=$name;
}




if(isset($_SESSION['username']))
{
  echo "done";
}









$mysql->close();





?>