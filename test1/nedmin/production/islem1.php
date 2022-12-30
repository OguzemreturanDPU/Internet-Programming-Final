<?php
ob_start();
session_start();
require_once '../netting/baglan.php'; 
if (isset($_POST['insertislemi'])) {



$kaydet=$db->prepare("INSERT into bilgilerim set 
    bilgiler_ad=:bilgiler_ad,
    bilgiler_soyad=:bilgiler_soyad,
    bilgiler_mail=:bilgiler_mail,
    bilgiler_yas=:bilgiler_yas,
    bakiye=:bakiye
    ");

$insert=$kaydet->execute(array(
	
'bilgiler_ad' => $_POST['bilgiler_ad'],
'bilgiler_soyad' => $_POST['bilgiler_soyad'],
'bilgiler_mail' => $_POST['bilgiler_mail'],
'bilgiler_yas' => $_POST['bilgiler_yas'],
'bakiye' => $_POST['bakiye'] 

));


if ($insert) {
    //echo  "kayıt basarılı";
 Header("Location:index1.php?durum=ok");
 exit;
} else {
    Header("Location:index1.php?durum=no");
    exit;
   //echo  "kayıt basarısız";
}
}

if (isset($_POST['updateislemi'])) {

	$bilgiler_id=$_POST['bilgiler_id'];


    $kaydet=$db->prepare("UPDATE bilgilerim set 
        bilgiler_ad=:bilgiler_ad,
        bilgiler_soyad=:bilgiler_soyad,
        bilgiler_mail=:bilgiler_mail,
        bilgiler_yas=:bilgiler_yas,
        bakiye=:bakiye
        where bilgiler_id={$_POST['bilgiler_id']}
        ");
    
    $insert=$kaydet->execute(array(
        
    'bilgiler_ad' => $_POST['bilgiler_ad'],
    'bilgiler_soyad' => $_POST['bilgiler_soyad'],
    'bilgiler_mail' => $_POST['bilgiler_mail'],
    'bilgiler_yas' => $_POST['bilgiler_yas'],
    'bakiye' => $_POST['bakiye']
    
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:duzenle.php?durum=ok&bilgiler_id=$bilgiler_id");
     exit;
    } else {
        Header("Location:duzenle.php?durum=no&bilgiler_id=$bilgiler_id");
        exit;
       //echo  "kayıt basarısız";
    }
}



if ($_GET['bilgilerimsil']=="ok") {
	

	$sil=$db->prepare("DELETE from bilgilerim where bilgiler_id=:id"); //where komutu kullanmazsak tüm tabloyu siler
	$kontrol=$sil->execute(array(
		'id' => $_GET['bilgiler_id']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index1.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index1.php?durum=no");
		exit;
	}


}





?>