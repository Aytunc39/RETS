<?php 
include "yakala.php";
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>RETS Giriş</title>
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>






</head>
<link rel="stylesheet" type="text/css" href="style.css" />
<body>



<div class="sayfa">
    <div class="sliderKonum">
        <div class="slider">
            <a class="img-bir" href="logo.png" >
                <img src="logo.png" alt="resim" width="700" height="370">
            </a>
            <a class="img-iki" href="bilgi.png">
                <img src="bilgi.png" alt="resim" width="680" height="370">
            </a>

        </div>
    </div>
</div>




<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html"> <img src="logo.png" width="50" height="30" >
</a>
    </div>
    
  </div>
</nav>
  

<div class="container">
  <section id="content">
    <form method="POST" action="login.php">
      <h1>Giriş Yap</h1>
      
      <?php 
      if($hataMsg)
      {
      	echo "<p style='color:red;'> $hataMsg</p>"; 
      }

      ?>
   
      <div>
        <input type="text" placeholder="Kullanıcı Adı" name="ltc"  />
      </div>
      <div>
        <input type="password" placeholder="Şifre"  name="lsifre"  />
      </div>
      <div>
        <input type="submit" value="Giriş Yap" />
        <a href="sifreunutma.html">Şifreni mi Unuttun?</a>
        <a href="kayit.html">Kayıt OL</a>
         
      </div>
    </form><!-- form -->

    
  </section><!-- content -->
</div><!-- container -->

</body>
</html>