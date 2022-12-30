
<?php 

include 'header.php'; 

?>

<?php require_once '../netting/baglan.php'; ?>

<style>

body {
    background: #FFFFFF;
}

</style>



<body>


	<center><h4>Kayıtların Listelenmesi</h4><center>
	<hr>


<table style="width: 60%" border="1">

 <tr>
<th>S.NO</th>
<th>ID</th>
<th>Ad</th>
<th>Soyad</th>
<th>Mail</th>
<th>Yaş</th>
<th>Bakiye</th>
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
<td><?php echo $bilgilerimcek['bakiye'] ?></td>
<td align="center"><a href="duzenle.php?bilgiler_id=<?php echo $bilgilerimcek['bilgiler_id'] ?>"><button>Düzenle</button></td></a>
<td align="center"><a href="islem1.php?bilgiler_id=<?php echo $bilgilerimcek['bilgiler_id'] ?>&bilgilerimsil=ok"><button>Sil</button></td></a>
 </tr>

 <?php } ?>

</table>


</body>
</html>
