<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=oguzbank;charset=utf8",'root','12345678');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>