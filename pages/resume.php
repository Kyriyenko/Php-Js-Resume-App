<?php
$mysql=new mysqli('localhost','admin','ei7veeChu4bo','my_db');
$result=$mysql->query("SELECT * FROM `resume_data` WHERE `type`='editable' ");
$user=$result->fetch_assoc();
if(count($user)==0)
{
    $result=$mysql->query("SELECT * FROM `resume_data` WHERE `type`='default' ");
    $user=$result->fetch_assoc();

}

?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<div class="container">
    <div class="content">
        <div class="content-aside">
            <img  src="https://st.depositphotos.com/1898481/3932/i/600/depositphotos_39322185-stock-photo-male-silhouette-isolated-on-white.jpg"  class="aside-img">
            <div class="aside-block">
                <div class="head">CONTACT</div>
                <div class="ol-list">
                    <ol class="li-item" > <?php  echo $user['user_phone']; ?></ol>
                    <ol class="li-item"> <?php  echo $user['user_mail']; ?></ol>
                    <ol class="li-item"><?php  echo $user['user_network']; ?></ol>
                </div>
            </div>
            <div class="aside-block">
                <div class="head">EDUCATION</div>
                <div class="ol-list">
                    <ol><?php  echo $user['user_education']; ?></ol>
                </div>
            </div>
            <div class="aside-block">
                <div class="head">SKILLS</div>
                <div class="ol-list">
                    <?php  echo $user['user_skills']; ?>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="main-profile">
                <h1><?php  echo $user['user_name']; ?></h1>
            </div>
            <div class="main-experience">
                <div class="experience-container">
                    <h2>PROFILE</h2>
                    <div><?php  echo $user['user_profile']; ?></div>
                </div>
            </div>
            <div class="main-experience">
                <div class="experience-container">
                    <h2>EXPERIENCE</h2>
                    <div><?php  echo $user['user_experience']; ?> </div>
                </div>
            </div>

        </div>

    </div>

</div>



</body>

</html>