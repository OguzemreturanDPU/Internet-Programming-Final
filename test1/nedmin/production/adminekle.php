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

    <h1>Müşteri Kayıt işlemi</h1>
    <hr>
    <?php 
	if ($_GET['durum']=="ok") {
		
		echo "İşlem başarılı";

	} elseif ($_GET['durum']=="no") {

		echo "İşlem başarısız";


	}

	?>
    </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Ayar 1</a>
                  </li>
                  <li><a href="#">Ayar 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

	
    <form action="islem1.php" method="POST">
		
		<input type="text" required="" name="kullanici_adsoyad" placeholder="Ad Ve Soyad Giriniz...">
		<input type="text" required="" name="kullanici_password" placeholder="Şifre Giriniz...">
		<input type="email" required="" name="kullanici_mail" placeholder="Mail Giriniz...">
        <input type="text" required="" name="kullanici_gsm" placeholder="Tel Giriniz...">
		<input type="text" required="" name="kullanici_yetki" placeholder="Yetkisini Giriniz...">
		<button type="submit" name="insertislemi1">Admin Kullanici Kaydet</button>
		<center>

	</form>

	<br>

	

</body>
</html>