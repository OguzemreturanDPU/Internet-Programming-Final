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
 Header("Location:bilgiler.php?durum=ok");
 exit;
} else {
    Header("Location:bilgiler.php?durum=no");
    exit;
   //echo  "kayıt basarısız";
}
}



if (isset($_POST['insertislemi1'])) {



    $kaydet=$db->prepare("INSERT into adminkullanici set 
        kullanici_adsoyad=:kullanici_adsoyad,
        kullanici_password=:kullanici_password,
        kullanici_mail=:kullanici_mail,
        kullanici_gsm=:kullanici_gsm,
        kullanici_yetki=:kullanici_yetki
        ");
    
    $insert=$kaydet->execute(array(
        
    'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
    'kullanici_password' => $_POST['kullanici_password'],
    'kullanici_mail' => $_POST['kullanici_mail'],
    'kullanici_gsm' => $_POST['kullanici_gsm'],
    'kullanici_yetki' => $_POST['kullanici_yetki'] 
    
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:kullanici.php?durum=ok");
     exit;
    } else {
        Header("Location:kullanici.php?durum=no");
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
     Header("Location:bilgiler.php?durum=ok&bilgiler_id=$bilgiler_id");
     exit;
    } else {
        Header("Location:bilgiler.php?durum=no&bilgiler_id=$bilgiler_id");
        exit;
       //echo  "kayıt basarısız";
    }
}

if (isset($_POST['updateislemi1'])) {

	$bilgiler_id=$_POST['kullanici_id'];


    $kaydet=$db->prepare("UPDATE adminkullanici set 
        kullanici_adsoyad=:kullanici_adsoyad,
        kullanici_mail=:kullanici_mail,
        kullanici_gsm=:kullanici_gsm,
        kullanici_yetki=:kullanici_yetki
        where kullanici_id={$_POST['kullanici_id']}
        ");
    
    $insert=$kaydet->execute(array(
        
    'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
    'kullanici_mail' => $_POST['kullanici_mail'],
    'kullanici_gsm' => $_POST['kullanici_gsm'],
    'kullanici_yetki' => $_POST['kullanici_yetki']
    
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:kullanici.php?durum=ok&kullanici_id=$kullanici_id");
     exit;
    } else {
        Header("Location:kullanici.php?durum=no&kullanici_id=$kullanici_id");
        exit;
       //echo  "kayıt basarısız";
    }
}



if (isset($_POST['updateislemi2'])) {

	$bilgiler_id=$_POST['sno'];


    $kaydet=$db->prepare("UPDATE islem set 
        gonderen=:gonderen,
        alıcı=:alıcı,
        yapilanislem=:yapilanislem,
        bakiye=:bakiye
        where sno={$_POST['sno']}
        ");
    
    $insert=$kaydet->execute(array(
        
    'gonderen' => $_POST['gonderen'],
    'alıcı' => $_POST['alıcı'],
    'yapilanislem' => $_POST['yapilanislem'],
    'bakiye' => $_POST['bakiye']
    
    ));
    
    
    if ($insert) {
        //echo  "kayıt basarılı";
     Header("Location:islembilgi.php?durum=ok&sno=$sno");
     exit;
    } else {
        Header("Location:islembilgi.php?durum=no&sno=$sno");
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

		Header("Location:bilgiler.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:bilgiler.php?durum=no");
		exit;
	}


}


if ($_GET['bilgilerimsil1']=="ok") {
	

	$sil=$db->prepare("DELETE from adminkullanici where kullanici_id=:id"); 
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:kullanici.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:kullanici.php?durum=no");
		exit;
	}


}


if ($_GET['bilgilerimsil2']=="ok") {
	

	$sil=$db->prepare("DELETE from islem where sno=:id"); 
	$kontrol=$sil->execute(array(
		'id' => $_GET['sno']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:islembilgi.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:islembilgi.php?durum=no");
		exit;
	}


}





?>