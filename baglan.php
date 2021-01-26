<?php

if($_POST)
{
try {

  $db=new PDO("mysql:host=localhost;dbname=giris;charset=utf8",'admin','furkanaytuncihat');
}

catch (PDOExpception $e) {

  echo $e->getMessage();
  exit();
}
}
?>
