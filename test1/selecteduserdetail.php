<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['bilgiler_id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from bilgilerim where bilgiler_id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from bilgilerim where bilgiler_id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negatif Değerler Transfer Edilemez")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['bakiye']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Yetersiz bakiye")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! 0 değeri transfer edilemez')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['bakiye'] - $amount;
                $sql = "UPDATE bilgilerim set bakiye=$newbalance where bilgiler_id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['bakiye'] + $amount;
                $sql = "UPDATE bilgilerim set bakiye=$newbalance where bilgiler_id=$to";
                mysqli_query($conn,$sql);
                
                $gonderen = $sql1['bilgiler_ad'];
                $alıcı = $sql2['bilgiler_ad'];
                $sql = "INSERT INTO islem(`gonderen`, `alıcı`, `bakiye`) VALUES ('$gonderen','$alıcı','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('islem Successful');
                                     window.location='transfermoney.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
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
        <h2 class="text-center pt-4">islem</h2>
            <?php
                include 'config.php';
                $sid=$_GET['bilgiler_id'];
                $sql = "SELECT * FROM  bilgilerim where bilgiler_id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
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
                    <td class="py-2"><?php echo $rows['bilgiler_id'] ?></td>
                    <td class="py-2"><?php echo $rows['bilgiler_ad'] ?></td>
                    <td class="py-2"><?php echo $rows['bilgiler_mail'] ?></td>
                    <td class="py-2"><?php echo $rows['bakiye'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer edilecek kişi:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Seç</option>
            <?php
                include 'config.php';
                $sid=$_GET['bilgiler_id'];
                $sql = "SELECT * FROM bilgilerim where bilgiler_id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['bilgiler_id'];?>" >
                
                    <?php echo $rows['bilgiler_ad'] ;?> (bakiye: 
                    <?php echo $rows['bakiye'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Miktar:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>