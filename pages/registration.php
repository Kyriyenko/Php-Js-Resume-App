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




  <form   id="dm"  class="registration-form">
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
    <div class="maine-section">
        <input  class="maine input-firstName" id="name" placeholder="First Name" name="name" type="text">
        <span class="first-name-exe"></span>
      <input  class="maine input-ema" placeholder="Email"  name="ema" type="text">
        <span class="email-exe"></span>
      <input  class="first-pass maine" placeholder="password" name="pass" type="text">
        <span class="pass-exe"></span>
      <input  class="last-pass maine"  placeholder="confirm password" name="confPass" type="text">
    </div>

    </div>
    <div class="form-inputs">
      <div class="name-section">
        <input class="r1" type="radio" name="acc" id="size_1" value="small">
        <label for="size_1">i accept <span class="green-text">Terms Of Use</span>&<span class="green-text">Privacy Policy.</span></label>
      </div>
    </div>
    <div class="form-inputs">
      <div class="maine-section">
          <span class="checkbox-exe"></span>
        <button id="send-val" class="register-btn">Register Now</button>
      </div>
    </div>
  </form>

<a class="account-link" href="#">Already have an account?Skin It</a>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/registration.js"></script>

</body>
</html>
