<?php
ob_start();
session_start();
require_once 'baglan.php'; 


if(isset($_POST['kayit'])){
	$bilgiler_mail=$_POST['bilgiler_mail'];
	$password=$_POST['password'];
	$password_again=@$_POST['password_again'];
    $bilgiler_ad=$_POST['bilgiler_ad'];
    $bilgiler_soyad=$_POST['bilgiler_soyad'];
    $bilgiler_yas=$_POST['bilgiler_yas'];

	
	if(!$bilgiler_mail){
		echo "lütfen kullanıcı adınızı giriniz";
	}elseif(!$password && !$password_again){
		echo "lütfen şifrenizi girin";
	}elseif($password !=$password_again){
		echo "girdiğiniz şifre aynı değil";
	}else{
		$sorgu = $db->prepare('INSERT INTO bilgilerim SET bilgiler_mail=?,password=?,bilgiler_ad=?,bilgiler_soyad=?,bilgiler_yas=?');
		$ekle = $sorgu->execute([
		$bilgiler_mail, sha1($password), $bilgiler_ad, $bilgiler_soyad, $bilgiler_yas
		]);
		if($ekle){
			echo "kayıt başarıyla gerçekleşti yönlendiriliyorsunuz";
			header('Refresh:2;Login.php');
		}else{
			echo "bir hata oluştu";
		}
	}
}



if(isset($_POST['giris'])){
    $bilgiler_mail = $_POST['bilgiler_mail'];
    $password = $_POST['password'];

    if(!$bilgiler_mail){
        echo "kullanıcı adını giriniz";
    } else if(!$password){
        echo "Şifrenizi giriniz";
    } else {
        $kullanici_sor = $db->prepare('SELECT * from bilgilerim where bilgiler_mail = ? AND password = ?');
        $kullanici_sor->execute([
            $bilgiler_mail,sha1($password)
        ]);

        $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['bilgiler_mail']=$bilgiler_mail;
            echo "Başarıyla Giriş Yaptınız";
            header('Refresh:2; AnaSayfa.php');
        } else {
            echo "Başarısız Giriş Yaptınız";
        }
    }
}



?>