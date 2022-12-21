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
    <h1>Veritabanı PDO Düzenleme işlemi</h1>
    <hr>
    <?php 
	if ($_GET['durum']=="ok") {
		
		echo "İşlem başarılı";

	} elseif ($_GET['durum']=="no") {

		echo "İşlem başarısız";


	}

	?>

<?php 

$bilgilerimsor=$db->prepare("SELECT * from bilgilerim where bilgiler_id=:id");
$bilgilerimsor->execute(array(
    'id' => $_GET['bilgiler_id']
));

$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

?>

<form action="islem.php" method="POST">

    <input type="text" required="" name="bilgiler_ad" value="<?php echo $bilgilerimcek['bilgiler_ad'] ?>">
    <input type="text" required="" name="bilgiler_soyad" value="<?php echo $bilgilerimcek['bilgiler_soyad'] ?>">
    <input type="email" required="" name="bilgiler_mail" value="<?php echo $bilgilerimcek['bilgiler_mail'] ?>">
    <input type="text" required="" name="bilgiler_yas" value="<?php echo $bilgilerimcek['bilgiler_yas'] ?>">

    <input type="hidden" value="<?php echo $bilgilerimcek['bilgiler_id'] ?>" name="bilgiler_id">
    <button type="submit" name="updateislemi">Formu Düzenle</button>

</form>

<br>


</body>
</html>