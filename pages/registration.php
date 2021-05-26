<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/registration.css">
    <link rel="stylesheet" href="../css/main.css">
  <title>Registration</title>
</head>
<body>

<?php include "../pages/menu.php"; ?>


  <form  action="../check.php"  method="post" id="dm"  class="registration-form">
    <div class="form-header">
      <div class="header-logo">
        <div class="line"><hr></div>
        <h1>Register</h1>
        <div class="line"><hr></div>
      </div>
      <div class="header-inner">
        Create your own account. Its free and only takes one minute
      </div>
    </div>
    <div class="form-inputs">
      <div class="name-section">
        <input class="input-firstName" id="name" placeholder="First Name" name="name" type="text">
        <input class="input-lastName" id="last-name" placeholder="Last Name" type="text">
      </div>
    </div>
    <div class="form-inputs">
    <div class="maine-section">
      <input  class="maine" placeholder="Email"  name="ema" type="text">
      <input  class="maine" placeholder="password" name="pass" type="text">
      <input  class="maine"  placeholder="confirm password" name="confPass" type="text">
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
        <button class="register-btn">Register Now</button>
      </div>
    </div>
  </form>

<a class="account-link" href="#">Already have an account?Skin It</a>



</body>
</html>
