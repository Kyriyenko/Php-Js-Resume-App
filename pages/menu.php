<?php
session_start();
?>


<form  method="get">
 <nav>
  <ul>
    <li><a class="nav-btn-r1" href="?tab=resume">resume</a></li>
        <?php
        if(isset($_SESSION['username']))
        {
             ?> <li><a class="nav-btn-r1" href="?tab=form">form</a></li>
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
          echo '<li><a class="nav-btn-r1" href="?tab=login">login</a></li>';
          echo '<li><a class="nav-btn-r1" href="?tab=registration">registration</a></li>';
      }

      ?>

      <?php

      if(isset($_SESSION['username']))
      {
          echo '<li><a class="nav-btn-r1" href="?tab=editpanel">editpanel</a></li>';
          echo '<li><a  href="../logout.php">Log out</a></li>';
      }



      ?>
  </ul>
 </nav>

<script src="../js/nav.js"></script>
</form>