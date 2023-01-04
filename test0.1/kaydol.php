<?php require_once 'baglan.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaydol Sayfası</title>
	<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #f2f2f2;  
}  
button {
    background-color: #FF0000;
    width: 15%;
    color: white;
    padding: 15px;
    margin: 10px 0px;
    border: none;
    cursor: pointer;
    font-size: 30px;
}
.button1 {
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 14px 2px;
    width: 5.7%;
}

.button2 {background-color: #4CAF50;}

 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=email], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid #C0C0C0;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  '
    }   
        
 .container {   
        padding: 25px;   
        background-color: #00FFFF;  
    }   
</style>   
</head>
<body>
<br>

	<center> <h1> Kaydolma İşlemi </h1> </center>   
   
    <br>
    <br>
	<hr>
    <form action="islem.php" method="POST">
		
		<input type="text"  name="bilgiler_ad" placeholder="Adınızı Giriniz...">
		<input type="text"  name="bilgiler_soyad" placeholder="Soyadınızı Giriniz...">
        <input type="password"  name="password" placeholder="Şifre Giriniz...">
        <input type="password"  name="password_again" placeholder="Tekrar Şifre Giriniz...">
		<input type="email"  name="bilgiler_mail" placeholder="Mail Giriniz...">
		<input type="text"  name="bilgiler_yas" placeholder="Yaş Giriniz...">
		<center><button type="submit" href="Login.php" name="kayit">Kaydol</button><center>

	</form>
    <hr>
	<br>
   <center> <button class="button1 button2"><a href="Login.php">Login</a></button><center>
    
</body>
</html>