<?php



$name =filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);

$ema =filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

$pass =filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);




if(mb_strlen($name)<1||mb_strlen($ema)<10||mb_strlen($pass)<4||mb_strlen($name)<4)
{
    echo "smth wrong";
    exit();

}
elseif (mb_strlen($name)>12||mb_strlen($ema)>60||mb_strlen($pass)>59||mb_strlen($name)>59)
{
   exit();
}




$pass=md5($pass."ghtjj");

$mysql=new mysqli('localhost','admin','ei7veeChu4bo','my_db');
$mysql->query("INSERT INTO `users` (`name`,`email`,`password`)  VALUES('$name','$ema','$pass')");
$mysql->close();



header('location:../index.php');

?>