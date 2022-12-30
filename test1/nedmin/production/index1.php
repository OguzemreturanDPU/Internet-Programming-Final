<?php require_once '../netting/baglan.php'; ?>
<?php 

include 'header.php'; 

?>
<style>

body {
    background: #FFFFFF;
}

</style>

<body>
<center>

    <h1>Veritabanı Kişi Kayıt işlemi</h1>
    <hr>
    <?php 
	if ($_GET['durum']=="ok") {
		
		echo "İşlem başarılı";

	} elseif ($_GET['durum']=="no") {

		echo "İşlem başarısız";


	}

	?>
    

	
    <form action="islem1.php" method="POST">
		
		<input type="text" required="" name="bilgiler_ad" placeholder="Adınızı Giriniz...">
		<input type="text" required="" name="bilgiler_soyad" placeholder="Soyadınızı Giriniz...">
		<input type="email" required="" name="bilgiler_mail" placeholder="Mail Giriniz...">
		<input type="text" required="" name="bilgiler_yas" placeholder="Yaş Giriniz...">
		<button type="submit" name="insertislemi">Formu Gönder</button>
		<center>

	</form>

	<br>

	

</body>
</html>