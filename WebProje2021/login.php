<?php

ob_start();
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$ogrencimaili = "g181210032@sakarya.edu.tr" ;

if(!empty($username) and !empty($password)){

    if($username==$ogrencimaili and $password=="123")  {
        $_SESSION["login"] = "true";
        $_SESSION["user"] = $username;
        $_SESSION["pass"] = $password;
        echo "Hoşgeldin  &ensp;    &ensp;  ";echo  $username;
        header("Refresh: 2; url=Hakkımda.html");
    }
    else{
        $_SESSION["login"] = "false";
        echo "Kullancı Adı veya Şifre Yanlış.<br>";
        echo "Tekrar giriş sayfasına yönlendiriliyorsunuz!";
        header("Refresh: 2; url=login.html");
    }
}else{
echo "KULLANICI ADI VE ŞİFRE BOŞ BIRAKILAMAZ!<br><br>";
echo "TEKRAR GİRİŞ SAYFASINA YÖNLENDİRİLİYORSUNUZ!";
header("Refresh: 2; url=login.html");
}

 
ob_end_flush();
?>