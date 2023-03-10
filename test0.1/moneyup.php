
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>islem</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    	
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}

    </style>
</head>
<body>
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4">Para Yatırma</h2>
            <?php
                include 'config.php';


if(isset($_POST['submit']))

{
    if (($_POST['amount'])<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negatif Değerler Transfer Edilemez")';
        echo '</script>';
    }

    else if (($_POST['amount'])>5000)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Merkez Bankası Kuralları Gereğince En fazla 5000 TL para yatırabilirsin")';
        echo '</script>';
    }
    


   
    else if($_POST['amount'] == 0){

         echo "<script type='text/javascript'>";
         echo "alert('0 Miktarı Transfer Edilemez')";
         echo "</script>";
     }
     else
     {
        $yapilanislem = "Para Yatırma";
        $eklenecekdolar = $_POST['amount'];
        $mevcutdolar = $kullanicicek ['bakiye'];
        $dolar = $eklenecekdolar + $mevcutdolar;
     
        $sql = "UPDATE bilgilerim set bakiye=bakiye+".$_POST['amount']." where bilgiler_id=".$kullanicicek['bilgiler_id'];
        mysqli_query($conn,$sql);

        $gonderen = $kullanicicek ['bilgiler_ad'];
                $alıcı = $kullanicicek ['bilgiler_ad'];
                $sql = "INSERT INTO islem(`yapilanislem`,`gonderen`, `alıcı`, `bakiye`, `datetime` ) VALUES ('$yapilanislem','$gonderen','$alıcı','$eklenecekdolar', CURRENT_TIMESTAMP)";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('İşlem Başarılı');
                                     window.location='AnaSayfa.php';
                           </script>";
                }
     }
   

   

}


            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">İsim</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Bakiye</th>
                </tr>
               
                <tr>
                    <td class="py-2"><?php echo  $kullanicicek['bilgiler_id']  ?></td>
                    <td class="py-2"><?php echo $kullanicicek ['bilgiler_ad']  ?></td>
                    <td class="py-2"><?php echo $kullanicicek ['bilgiler_mail']  ?></td>
                    <td class="py-2"><?php echo $kullanicicek ['bakiye']  ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <br>
        <br>
            <label>Miktar:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-3" name="submit" type="submit" id="myBtn">Para Yatır</button>
            </div>
        </form>
    </div>
</body>
</html>