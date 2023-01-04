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
    <h1>İşlemleri Düzenleme</h1>
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

$bilgilerimsor=$db->prepare("SELECT * from islem where sno=:id");
$bilgilerimsor->execute(array(
    'id' => $_GET['sno']
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

    <input type="text" required="" name="gonderen" value="<?php echo $bilgilerimcek['gonderen'] ?>">
    <input type="text" required="" name="alıcı" value="<?php echo $bilgilerimcek['alıcı'] ?>">
    <input type="text" required="" name="yapilanislem" value="<?php echo $bilgilerimcek['yapilanislem'] ?>">
    <input type="text" required="" name="bakiye" value="<?php echo $bilgilerimcek['bakiye'] ?>">

    <input type="hidden" value="<?php echo $bilgilerimcek['sno'] ?>" name="sno">
    <button type="submit" name="updateislemi2">İşlemi Düzenle</button>

</form>
<center>

<br>


</body>
</html>