
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

<?php

include "pages/menu.php";


$allowed = array('registration', 'login', 'editpanel', 'form', 'resume');
$page = ( isset($_GET['tab']) ) ? $_GET['tab'] : 'resume';
if ( in_array($page, $allowed) ) {
    include("pages/$page.php");
}
?>


</body>

</html>
