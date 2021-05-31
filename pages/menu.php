<?php
session_start();
?>


<form  method="get">
 <nav>
  <ul>
    <li><a class="nav-btn-r1" href="?tab=resume" data-page="resume">Resume</a></li>
        <?php
        if(isset($_SESSION['username']))
        {
             ?> <li><a class="nav-btn-r1" href="?tab=form" data-page="form">Form</a></li>
            <li><a href="#">Start</a></li>
            <li><a href="#">Icons</a></li>
            <li><a href="#">Docs</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Plans</a></li>
            <li><a href="#">Blog</a></li>
        <?php }
        ?>

      <?php

      if(!isset($_SESSION['username']))
      {
          echo '<li><a class="nav-btn-r1" href="?tab=login" data-page="login">Login</a></li>';
          echo '<li><a class="nav-btn-r1" href="?tab=registration" data-page="registration">Registration</a></li>';
      }

      ?>

      <?php

      if(isset($_SESSION['username']))
      {
          echo '<li><a class="nav-btn-r1" href="?tab=editpanel" data-page="editpanel">Editpanel</a></li>';
          echo '<li><a  href="../logout.php" data-page="login">Log out</a></li>';
      }



      ?>
  </ul>
 </nav>

<script src="../js/nav.js"></script>
</form>