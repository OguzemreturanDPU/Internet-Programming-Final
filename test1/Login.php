<?php 
require_once 'baglan.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], [type=email], input[type=password] {
  width: 30%;
  padding: 12px 40px;
  margin: 5px 45px;
  display: inline-block;
  border: 10px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 15px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 14px 0 12px 0;
}

img.avatar {
  width: 25%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
      </style>
    <title>Login</title>
  </head>
  <body>

 <center> <h2>Giriş Yap</h2> <center>

<form action="islem.php" method="post">
  <div class="imgcontainer">
    <img src="img/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="bilgiler_mail"><b>Email : </b></label>
    <input type="email" name="bilgiler_mail" id = "bilgiler_mail" required>

    <label for="password"><b>Şifre :</b></label>
    <input type="password" name="password" id = "password" required>
        
    <button type="submit" href="Login.php" name="giris">Giriş Yap</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"> <a href="kaydol.php">Kaydol</a></button>
  </div>
</form>
   
    
  </body>
</html>