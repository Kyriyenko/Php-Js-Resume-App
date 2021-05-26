<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>Login</title>
</head>
<body>

<?php include "../pages/menu.php"; ?>

<form action="../auth.php" method="post" class="login-form">
  <div class="form-header">
    <div class="header-logo">
      <div class="line"><hr></div>
      <h1>Login</h1>
      <div class="line"><hr></div>
    </div>
  </div>
  <div class="form-inputs">
    <div class="maine-section">
      <input  class="maine-input" name="namee" type="text">
      <input  class="maine-input" name="passw" type="text">
    </div>
  </div>
  <div class="form-inputs">
    <div class="name-section">
      <input type="radio" name="acc" id="size_1" value="small">
      <label for="size_1">i accept <span class="green-text">Terms Of Use</span>&<span class="green-text">Privacy Policy.</span></label>
    </div>
  </div>
  <div class="form-inputs">
    <div class="maine-section">
      <button class="login-btn">LogIn</button>
    </div>
  </div>
</form>
<a class="account-link" href="#">Create new account</a>
<script src="js/script.js"></script>
</body>
</html>
