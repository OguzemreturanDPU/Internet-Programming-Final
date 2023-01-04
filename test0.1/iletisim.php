<?php
    include 'config.php';
    $sql = "SELECT * FROM ayar";
    $result = mysqli_query($conn,$sql);
?>
<html>
<head>
<style>
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}
</style>
<?php
  include 'navbar.php';
  ?>
  <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title><?php echo $kullanicicek ['ayar_title']  ?></title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
  <body>
  

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">OGUZ BANK İLETİŞİM</h1>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="AnaSayfa.php">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Bize Ulaşın.
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">İsim</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Adresin</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">Söz Veriyoz Kimseyle Paylaşmayacağız :D</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Mesaj</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Gönder</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> ADRES</div>
                <div class="card-body">
                    <p><?php echo $rows ['ayar_adres']  ?></p>
                    <p><?php echo $rows ['ayar_il']  ?></p>
                    <p><?php echo $rows ['ayar_ilce']  ?></p>
                    <p><?php echo $rows ['ayar_mail']  ?></p>
                    <p><?php echo $rows ['ayar_tel']  ?></p>
                    <p><?php echo $rows ['ayar_gsm']  ?></p>
                    <p><?php echo $rows ['ayar_faks']  ?></p>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                <?php echo $rows ['ayar_description']  ?>
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Bilgiler</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><?php echo $rows ['ayar_mesai']  ?></li>
                    <li><?php echo $rows ['ayar_maps']  ?></li>
                    <li><?php echo $rows ['ayar_analystic']  ?></li>
                    <li><?php echo $rows ['ayar_zopim']  ?></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>İletişim</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i><?php echo $rows ['ayar_title']  ?></li>
                    <li><i class="fa fa-envelope mr-2"></i> <?php echo $rows ['ayar_mail']  ?></li>
                    <li><i class="fa fa-phone mr-2"></i> <?php echo $rows ['ayar_tel']  ?></li>
                    <li><i class="fa fa-print mr-2"></i> <?php echo $rows ['ayar_gsm']  ?></li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Yukarı Çık</a>
                </p>
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <?php echo $rows ['ayar_author']  ?><i>t-php</i></a></p>
            </div>
        </div>
    </div>
</footer>
<?php
                    }
                ?>
</body>
</html>