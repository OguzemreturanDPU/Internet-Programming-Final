<?php
ob_start();
session_start();
include 'baglan.php';

//Belirli veriyi seçme işlemi
$ayarsor=$db->prepare("SELECT * FROM bilgilerim where bilgiler_id=:id");
$ayarsor->execute(array(
  'id' => 0
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


$kullanicisor=$db->prepare("SELECT * FROM bilgilerim where bilgiler_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['bilgiler_mail']
  ));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {

  Header("Location:login.php?durum=izinsiz");
  exit;
 $_SESSION['kadicek'] = $kullanicicek['bilgiler_ad'];

}



?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

    <title>Oguz Banka Sistemi</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Hoşgeldiniz</h3>
                  <h1><?php echo $kullanicicek ['bilgiler_ad']  ?> <?php echo $kullanicicek ['bilgiler_soyad']  ?></h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img class="im" src="img/oguzlogo.png" class="img-fluid pt-2">
              </div>
            </div> 
            <br>
            <br>
            <br>
            <section class="vh-40" style="background-color: #FFFFFF;">
  <div class="container py-1 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-8 col-lg-50 col-xl-60">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                  alt="Generic placeholder image" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                  style="background-color: #efefef;">
                  <div class="px-3">
                    <p class="small text-muted mb-1">Mail</p>
                    <p class="mb-0"><?php echo $kullanicicek ['bilgiler_mail']  ?></p>
                  </div>
                  <div>
                    <p class="small text-muted mb-1">Yaş</p>
                    <p class="mb-0"><?php echo $kullanicicek ['bilgiler_yas']  ?></p>
                  </div>
                  <div  class="px-3">
                    <p class="small text-muted mb-1">Mevcut Bakiye</p>
                    <p class="mb-1"><?php echo $kullanicicek ['bakiye']  ?> TL</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      
          <br>
          <br>
          <br>
          <h3 class="action" ><span style="font-family: 'Roboto Slab', serif">Hangi İşlemi Yapmak İstersiniz ?</h3></span>
            <div class="column activity text-center">
                  
                  <div class="col-md act">
                   
                    <br>
                    <br>
                    <br>
                    <a href="transactionhistory.php"><button>Banka Transferi Geçmişi</button></a>
                  </div>

                  <div class="col-md act">
                   
                    <br>
                    <br>
                    <br>
                    <a href="transfermoney.php"><button>EFT/yada Havale</button></a>
                  </div>

                  <div class="col-md act">
                   
                    <br>
                    <br>
                    <br>
                    <a href="Doviz.php"><button>Döviz Kuru</button></a>
                  </div>

                  <div class="col-md act">
                   
                    <br>
                    <br>
                    <br>
                    <a href="moneyup.php"><button>Para Yatırma</button></a>
                  </div>

                  <div class="col-md act">
                   
                   <br>
                   <br>
                   <br>
                   <a href="moneydown.php"><button>Para Çekme</button></a>
                 </div>
                  
            </div>
           
      </div>
      <br>

      <?php
          include 'footer.php';
       ?>
     
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
 