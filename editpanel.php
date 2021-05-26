<?php
$mysql=new mysqli('localhost','admin','ei7veeChu4bo','my_db');
$result=$mysql->query("SELECT * FROM `resume_data` WHERE `type`='default' ");
$user=$result->fetch_assoc();

$mysql->close();
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/editpanel.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Edit panel</title>
</head>
<body>

<?php include "menu.php"; ?>

<div class="container">
    <form  class="edit-form" action="change-content.php" method="post">
        <div class="content">
            <h1>Content settings</h1>
            <div class="contact">
                <div class="descr">Enter your name</div>

                 <input type="text" name="user-name" value="  <?php echo $user['user_name']; ?>"/>

                <div class="descr">Enter your phone</div>
                <?php
                echo '<input type="text" name="user-phone" value="'.$user['user_phone'].'"/>';
                ?>
                <div class="descr">Enter your social network</div>
                <?php
                echo '<input type="text" name="user-network" value="'.$user['user_network'].'"/>';
                ?>
                <div class="descr">Enter your mail</div>
                <?php
                echo '<input type="text" name="user-mail" value="'.$user['user_mail'].'"/>';
                ?>
            </div>
            <div class="education">
                <div class="descr">Enter your education</div>
                <?php
                echo '<input type="text" name="user-education" value="'.$user['user_phone'].'"/>';
                ?>
            </div>
            <div class="skills">
                <div class="descr">Enter your skills</div>
                 <textarea  name="skills"><?php echo $user['user_skills'] ?></textarea>
            </div>
            <div class="experience">
                <div class="descr">Enter your profile</div>
                <textarea  name="profile"><?php echo $user['user_profile'] ?></textarea>
            </div>
            <div class="profile">
                <div class="descr">Enter your experience</div>
                <textarea  name="experience"><?php echo $user['user_experience'] ?></textarea>
            </div>
        </div>
        <button class="confirm">Confirm</button>
    </form>

    <form class="edit-form" action="filldefault.php" method="post">
        <div class="fill-content">
            <h2>Fll default</h2>
            <button>Submit</button>
        </div>
    </form>


    <form  class="edit-form" action="makedump.php" method="post" ">
        <div class="fill-content">
            <h2>Make DB dump</h2>
            <button>Submit</button>
        </div>
    </form>


    <form  class="edit-form" action="restoredump.php" method="post" ">
    <div class="fill-content">
        <h2>Restore DB dump</h2>
        <button>Submit</button>
    </div>
    </form>



</div>


</body>
</html>
