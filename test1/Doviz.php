
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>


<?php
  include 'navbar.php';
?>
<?php
$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

foreach ($kur -> Currency as $cur) {
	if ($cur["Kod"] == "USD") {
		$usdAlis  = $cur -> ForexBuying;
		$usdSatis = $cur -> ForexSelling;
	}

	if ($cur["Kod"] == "EUR") {
		$eurAlis  = $cur -> ForexBuying;
		$eurAlis = $cur -> ForexSelling;
	}
  if ($cur["Kod"] == "AUD") {
		$audAlis  = $cur -> ForexBuying;
		$audAlis = $cur -> ForexSelling;
	}
  if ($cur["Kod"] == "GBP") {
		$gbpAlis  = $cur -> ForexBuying;
		$gbpAlis = $cur -> ForexSelling;
	}
  if ($cur["Kod"] == "KWD") {
		$kwdAlis  = $cur -> ForexBuying;
		$kwdAlis = $cur -> ForexSelling;
	}
}
?>
<center>
<div style="width:15%">
	<h3>Döviz Kuru</h3>
	<hr>
	<b>USD Alış: </b> <?php echo $usdAlis; ?> <br>
	<b>USD Satış: </b> <?php echo $usdSatis; ?>
	<hr>
	<b>EURO Alış: </b> <?php echo $eurAlis; ?> <br>
	<b>EURO Satış: </b> <?php echo $eurAlis; ?>
  <hr>
	<b>AUD Alış: </b> <?php echo $audAlis; ?> <br>
	<b>AUD Satış: </b> <?php echo $audAlis; ?>
</div>
<hr>
	<b>GBP Alış: </b> <?php echo $gbpAlis; ?> <br>
	<b>GBP Satış: </b> <?php echo $gbpAlis; ?>
</div>
<hr>
	<b>KWD Alış: </b> <?php echo $kwdAlis; ?> <br>
	<b>KWD Satış: </b> <?php echo $kwdAlis; ?>
</div>
<center>
