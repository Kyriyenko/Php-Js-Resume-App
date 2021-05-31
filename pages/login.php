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



<form  method="post" class="login-form">
  <div class="form-header">
    <div class="header-logo">
      <div class="line"><hr></div>
      <h1 class="log">Login</h1>
      <div class="line"><hr></div>
    </div>
  </div>
  <div class="form-inputs">
    <div class="maine-section">
      <input  class="maine-input" id="name" name="namee" placeholder="name" type="text">
        <span class="name-exe"></span>
      <input  class="maine-input" id="pass" name="passw"  placeholder="password" type="password">
        <span class="pass-exe"></span>
    </div>
  </div>
  <div class="form-inputs">
    <div class="name-section">
      <input type="radio" name="acc"  class="radio-1" id="size_1" value="small">
      <label for="size_1">i accept <span class="green-text">Terms Of Use</span>&<span class="green-text">Privacy Policy.</span></label>
    </div>
  </div>


  <div class="form-inputs">
    <div class="maine-section">
        <span class="check-exe"></span>
      <button  class="login-btn">LogIn</button>
    </div>
  </div>
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/login.js"></script>
</body>
</html>
