<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">


</head>

<body>

<?php include "menu.php"; ?>
<div class="container">
  <div class="form">
    <div class="form-content">

      <div class="form-item">
        <label>name</label>
        <div class="input-item">
          <input class="text input-name" type="text" name="name">
        </div>
      </div>

      <div class="form-item">
        <label>Email</label>
        <div class="input-item">
          <input class="text input-email" type="text" name="email">
        </div>
      </div>

      <div class="form-item">
        <label>Password</label>
        <div class="input-item">
          <input class="text input-password" type="text" name="password">
        </div>
      </div>

      <div class="form-item">
        <label>Gender</label>
        <div class="input-item input-gender">
          <input id="r1" class="gen" type="radio" name="gender" value="male"><label>Male</label>
          <input id="r2"  class="gen" type="radio" name="gender" value="female"><label>Female</label>
        </div>
      </div>

      <div class="form-item">
        <label>Birthdate</label>
        <input class="text input-birthdate" type="date" name="password">
      </div>

      <div class="form-contact">
        <div class="form-item">
          <label>Contacts</label>
          <select>
            <option>facebook</option>
            <option>telegram</option>
            <option>instagram</option>
            <option>facebook</option>
          </select>
          <input class="contact-input " type="text" name="contact">
          <span class="delete-btn">delete</span>
        </div>

        <div class="nav-btn">
          <button class="btn-save">Save</button>
          <label>or</label>
          <button class="btn-add">addNew</button>
        </div>
        <div class="form-item">
          <label>Photo</label>
          <div class="input-item">
            <input class="text" type="file" name="password">
          </div>
        </div>


        <div class="form-item">
          <label>Hobbies</label>
          <div class="input-item ">
            <textarea class="text-area input-hobbies">  </textarea>
          </div>
        </div>


        <div class="form-item">
          <label>Some Words</label>
          <div class="input-item">
            <textarea class="text-area  input-somewords">  </textarea>
          </div>
        </div>


        <div class="nav-btn">
          <button class="update-btn">OK</button>
          <button class="next-btn">Cancel</button>
        </div>
      </div>

        <div class="showData">

        </div>
    </div>



  </div>
</div>





<script src="js/script.js"></script>

</body>

</html>
