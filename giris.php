<?php 
session_start();
    $db = new PDO ("mysql:host=localhost;dbname=PhpFinal;charset=utf8", "root","");

    $Email = $_POST['Email'];
    $Parola = $_POST['Parola'];
if (!$Email || !$Parola){
    die("Boş bırakılamaz.");
}

$user = $db->query ("SELECT * FROM AmazonLogin WHERE Email='$Email' AND Parola='$Parola'")->fetch();

if ($user){
    $_SESSION['user']= $user;
    header('location:index2.php');
}else {
    echo "Bilgiler hatalı";
}