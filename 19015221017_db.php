<?php
//Oturum işlemlerinin yapılabilmesi için
session_start();
//$host = 'localhost';	//sunucu adı
$host = 'localhost';	//sunucu adı
$database = 'PhpFinal';	//veritabanı şemasının adı
$dbuser = 'root';		//kullanıcı adı
$dbpass = '';		//parola
$dsn = "mysql:host=" . $host . ";dbname=" . $database . ";charset=utf8";
try { //parametrelere göre bir DSN nesnesi oluşturuluyor
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	//PHP sayfalarında Türkçe karakterlerin görüntülenmesi için
	$pdo->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
	//echo "Bağlantı Kuruldu<br>";
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}


$KID_ = 0;
//Eğer KID Session değişkeni varsa oturum açılmış demektir
if (isset($_SESSION["KID"])) {
	$sqlU = "SELECT * FROM AmazonLogin WHERE KID = " . $_SESSION["KID"];
	$queryU = $pdo->query($sqlU);
	$rc = $queryU->rowCount();
	if ($rc == 1) {
		$rowU = $queryU->fetch(PDO::FETCH_ASSOC);
		extract($rowU);
		$KID_ = $rowU["KID"];
		$ad_soyad = $rowU["Ad"] . " " . $rowU["Soyad"];
	}
	$queryU->closeCursor();
}
