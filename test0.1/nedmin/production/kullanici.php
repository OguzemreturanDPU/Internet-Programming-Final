<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$kullanicisor=$db->prepare("SELECT * FROM adminkullanici");
$kullanicisor->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Admin Kullanıcıları<small>,

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>
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


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Kayıt Tarih</th>
                  <th>Ad Soyad</th>
                  <th>Şifre</th>
                  <th>Mail Adresi</th>
                  <th>Telefon</th>  
                  <th>Yetki</th>
                  <th>İşlem</th>
                  <th>İşlem</th>
                </tr>
              </thead>

              <tbody>

                <?php 

               $bilgilerimsor=$db->prepare("SELECT * from adminkullanici");
               $bilgilerimsor->execute();

               $say=0;

             while ($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                <tr>
                  <td><?php echo $bilgilerimcek['kullanici_zaman'] ?></td>
                  <td><?php echo $bilgilerimcek['kullanici_adsoyad'] ?></td>
                  <td><?php echo $bilgilerimcek['kullanici_password'] ?></td>
                  <td><?php echo $bilgilerimcek['kullanici_mail'] ?></td>
                  <td><?php echo $bilgilerimcek['kullanici_gsm'] ?></td>
                  <td><?php echo $bilgilerimcek['kullanici_yetki'] ?></td>
                  <td><center><a href="duzenle1.php?kullanici_id=<?php echo $bilgilerimcek['kullanici_id'] ?>"><button class="btn btn-primary btn-xs">Düzenle</button></center></td></a>
                  <td align="center"><a href="islem1.php?kullanici_id=<?php echo $bilgilerimcek['kullanici_id'] ?>&bilgilerimsil1=ok"><button class="btn btn-danger btn-xs">Sil</button></td></a>
                </tr>



                <?php  }

                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
