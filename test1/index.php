<?php require_once 'baglan.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud İşlemleri</title>
</head>
<body>

    <h1>Veritabanı PDO Kayıt işlemleri</h1>
    <hr>
    <?php 
	if ($_GET['durum']=="ok") {
		
		echo "İşlem başarılı";

	} elseif ($_GET['durum']=="no") {

		echo "İşlem başarısız";


	}

	?>
    

    <form action="islem.php" method="POST">
		
		<input type="text" required="" name="bilgiler_ad" placeholder="Adınızı Giriniz...">
		<input type="text" required="" name="bilgiler_soyad" placeholder="Soyadınızı Giriniz...">
		<input type="email" required="" name="bilgiler_mail" placeholder="Mail Giriniz...">
		<input type="text" required="" name="bilgiler_yas" placeholder="Yaş Giriniz...">
		<button type="submit" name="insertislemi">Formu Gönder</button>

	</form>

	<br>

	

</body>
</html>