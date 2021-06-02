<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

$name =filter_var(trim($_POST['user-name']),
    FILTER_SANITIZE_STRING);

$phone =filter_var(trim($_POST['user-phone']),
    FILTER_SANITIZE_STRING);

$network =filter_var(trim($_POST['user-network']),
    FILTER_SANITIZE_STRING);

$mail =filter_var(trim($_POST['user-mail']),
    FILTER_SANITIZE_STRING);

$education =filter_var(trim($_POST['user-education']),
    FILTER_SANITIZE_STRING);

$skills =filter_var(trim($_POST['skills']),
    FILTER_SANITIZE_STRING);

$profile =filter_var(trim($_POST['profile']),
    FILTER_SANITIZE_STRING);

$experience =filter_var(trim($_POST['experience']),
    FILTER_SANITIZE_STRING);


if(mb_strlen($name)<1||mb_strlen($phone)<10||mb_strlen($network)<4||mb_strlen($mail)<12
    ||mb_strlen($education)<10||mb_strlen($skills)<2||mb_strlen($profile)<10||mb_strlen($experience)<1)
{
    echo "incorrect data";
    exit();
}
if(isset($_SESSION['username']))
{
    $mysql=new mysqli('localhost','admin','ei7veeChu4bo','my_db');
    $mysql->query("delete from `resume_data` where `type` = 'editable' ");

    $mysql->query("INSERT INTO `resume_data` (`user_name`,`user_phone`,`user_network`,`user_mail`,`user_education`,`user_skills`,`user_profile`,`user_experience`,`type` )  
VALUES ('$name','$phone','$network','$mail','$education','$skills','$profile','$experience','editable')");

    $mysql->close();
    header('location:/index.php');

}

?>