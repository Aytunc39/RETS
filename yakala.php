<?php 
error_reporting(0);



$loginTc= $_POST['ltc'];
$loginSifre= $_POST['lsifre'];
$bransYetki = 0;
$pdrYetki = 1;
$hataMsg = '';




// veritabanı ulaşım bilgileri


if($_POST)
{
try {

  $db=new PDO("mysql:host=localhost;dbname=giris;charset=utf8",'admin','furkanaytuncihat');
}

catch (PDOExpception $e) {

  echo $e->getMessage();
  exit();
}
$sorgu= $db-> prepare("SELECT * FROM kullanicigirisi WHERE tcno=:loginTc");
$sorgu ->execute(['loginTc' => $loginTc]);
$kullanici = $sorgu->fetch(PDO::FETCH_ASSOC); 

if($kullanici)
{
  if($loginSifre === $kullanici['sifre'] && $kullanici['yetki']==='0')
  {
    
    $hataMsg =  ' Sifre Dogru. Giriş yaptınız';
    header('Location: bransogr.php');
    
  }
  elseif ($loginSifre === $kullanici['sifre'] && $kullanici['yetki']==='1' )
  {
   $hataMsg = 'Sifre Dogru. Giriş yaptınız.';
    header('Location: pdrogr.html');
  }
    
    else 
    {
   $hataMsg =  "sifre yanlis";
    }
  }
  else 
  {
   $hataMsg = 'kullanici yok';
  }
}


?>
