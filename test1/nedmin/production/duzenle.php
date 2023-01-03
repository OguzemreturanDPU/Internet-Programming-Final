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
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
<center>
    <h1>Müşteri Bilgilerini Düzenleme</h1>
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
<ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

<form action="islem1.php" method="POST">

    <input type="text" required="" name="bilgiler_ad" value="<?php echo $bilgilerimcek['bilgiler_ad'] ?>">
    <input type="text" required="" name="bilgiler_soyad" value="<?php echo $bilgilerimcek['bilgiler_soyad'] ?>">
    <input type="email" required="" name="bilgiler_mail" value="<?php echo $bilgilerimcek['bilgiler_mail'] ?>">
    <input type="text" required="" name="bilgiler_yas" value="<?php echo $bilgilerimcek['bilgiler_yas'] ?>">
    <input type="text" required="" name="bakiye" value="<?php echo $bilgilerimcek['bakiye'] ?>">

    <input type="hidden" value="<?php echo $bilgilerimcek['bilgiler_id'] ?>" name="bilgiler_id">
    <button type="submit" name="updateislemi">Müşteri Bilgilerini Düzenle</button>

</form>
<center>

<br>


</body>
</html>