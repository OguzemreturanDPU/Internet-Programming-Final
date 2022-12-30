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
    <h1>Veritabanı Kayıtlı Kişileri Düzenleme</h1>
    <hr>
    <?php 
	if ($_GET['durum']=="ok") {
		
		echo "İşlem başarılı";

	} elseif ($_GET['durum']=="no") {

		echo "İşlem başarısız";


	}

	?>
    <center>

<?php 

$bilgilerimsor=$db->prepare("SELECT * from bilgilerim where bilgiler_id=:id");
$bilgilerimsor->execute(array(
    'id' => $_GET['bilgiler_id']
));

$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

?>
<center>
<form action="islem1.php" method="POST">

    <input type="text" required="" name="bilgiler_ad" value="<?php echo $bilgilerimcek['bilgiler_ad'] ?>">
    <input type="text" required="" name="bilgiler_soyad" value="<?php echo $bilgilerimcek['bilgiler_soyad'] ?>">
    <input type="email" required="" name="bilgiler_mail" value="<?php echo $bilgilerimcek['bilgiler_mail'] ?>">
    <input type="text" required="" name="bilgiler_yas" value="<?php echo $bilgilerimcek['bilgiler_yas'] ?>">
    <input type="text" required="" name="bakiye" value="<?php echo $bilgilerimcek['bakiye'] ?>">

    <input type="hidden" value="<?php echo $bilgilerimcek['bilgiler_id'] ?>" name="bilgiler_id">
    <button type="submit" name="updateislemi">Formu Düzenle</button>

</form>
<center>

<br>


</body>
</html>