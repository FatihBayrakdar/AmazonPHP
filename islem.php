<?php 

        $db = new PDO ("mysql:host=localhost;dbname=PhpFinal;charset=utf8", "root","");

    $Ad = $_POST['Ad'];
    $Soyad = $_POST['Soyad'];
    $Email = $_POST['Email'];
    $Parola = $_POST['Parola'];


     if (!$Email || !$Parola || !$Ad){
     die("Lütfen boş alan bırakmayın.");
   }

   $ekle = $db->prepare("INSERT INTO AmazonLogin SET Ad = ?, Soyad = ?, Email = ?, Parola = ?");
   $ekle->execute([$Ad, $Soyad, $Email, $Parola]);

   if ($ekle){
       echo "Kayıt Oldunuz";
       header('location:login.php');
       
   } else {
       echo "Bir hata oluştu";
   }
   
?>