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


	<h4>Kayıtların Listelenmesi</h4>
	<hr>


<table style="width: 60%" border="1">

 <tr>
<th>S.NO</th>
<th>ID</th>
<th>Ad</th>
<th>Soyad</th>
<th>Mail</th>
<th>Yaş</th>
<th>İşlemler</th>
<th>İşlemler</th>
 </tr>

<?php
$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
$bilgilerimsor->execute();

$say=0;

while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++?>

 <tr>
 <td><?php echo $say; ?></td>
<td><?php echo $bilgilerimcek['bilgiler_id'] ?></td>
<td><?php echo $bilgilerimcek['bilgiler_ad'] ?></td>
<td><?php echo $bilgilerimcek['bilgiler_soyad'] ?></td>
<td><?php echo $bilgilerimcek['bilgiler_mail'] ?></td>
<td><?php echo $bilgilerimcek['bilgiler_yas'] ?></td>
<td align="center"><a href="duzenle.php?bilgiler_id=<?php echo $bilgilerimcek['bilgiler_id'] ?>"><button>Düzenle</button></td></a>
<td align="center"><a href="islem.php?bilgiler_id=<?php echo $bilgilerimcek['bilgiler_id'] ?>&bilgilerimsil=ok"><button>Sil</button></td></a>
 </tr>

 <?php } ?>

</table>

</body>
</html>