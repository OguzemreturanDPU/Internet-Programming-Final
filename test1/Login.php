<?php 
require_once 'baglan.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>

    <form action="islem.php" method="post">

      <label for="bilgiler_mail">Email : </label>
      <input type="email" name="bilgiler_mail" id = "bilgiler_mail"> <br>

      <label for="bilgiler_mail">Password : </label>
      <input type="password" name="password" id = "password"> <br>

      <button href="Login.php" name="giris">Login</button>
    </form>
    <br>
    <a href="kaydol.php">Kaydol</a>
    
  </body>
</html>