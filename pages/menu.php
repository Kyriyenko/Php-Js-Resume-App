<?php
session_start();
?>


<form  method="get">
 <nav>
  <ul>
    <li><a href="../index.php">Resume</a></li>
        <?php
        if(isset($_SESSION['username']))
        {
             ?> <li><a href="../pages/form.php">Form</a></li>
            <li><a href="#">Start</a></li>
            <li><a href="#">Icons</a></li>
            <li><a href="#">Docs</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Plans</a></li>
            <li><a href="#">Blog</a></li>
        <?php }
        ?>
    <li><a  methods="GET" href="../pages/login.php">Sign In</a></li>
    <li><a href="../pages/registration.php">Registration</a></li>
      <?php

      if(isset($_SESSION['username']))
          echo '<li><a href="../pages/editpanel.php">Edit panel</a></li>';
      ?>
  </ul>
 </nav>


</form>