<?php
session_start();
?>


<form  method="get">
 <nav>
  <ul>
    <li><a href="?tab=resume">Resume</a></li>
        <?php
        if(isset($_SESSION['username']))
        {
             ?> <li><a href="?tab=form">Form</a></li>
            <li><a href="#">Start</a></li>
            <li><a href="#">Icons</a></li>
            <li><a href="#">Docs</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Plans</a></li>
            <li><a href="#">Blog</a></li>
        <?php }
        ?>
    <li><a  href="?tab=login">Sign In</a></li>
    <li><a href="?tab=registration">Registration</a></li>
      <?php

      if(isset($_SESSION['username']))
      {
          echo '<li><a href="?tab=editpanel">Edit panel</a></li>';
          echo '<li><a href="../logout.php">Log out</a></li>';
      }



      ?>
  </ul>
 </nav>


</form>