<?php

$servername="localhost";
$username="root";
$password="";
$dbname="iletisim";

$connect = new mysqli($servername, $username, $password, $dbname);
$connect->set_charset("utf8");

$isim = @$_POST["isim"];
$mail = @$_POST["mail"];
$mesaj = @$_POST["mesaj"];
$ekle = "insert into mesajlar(isim, mail, mesaj) values('$isim', '$mail', '$mesaj')";

if($connect->query($ekle))
{
	echo "<script> alert('Mesajınız Gönderildi!')</script>";
	echo "<script> location.href='index.php'</script>";
}

else
{
	echo("hata");
}
?>