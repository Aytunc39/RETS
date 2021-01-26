<?php

if($_POST)
{
try {

  $db=new PDO("mysql:host=127.0.0.1;dbname=giris;charset=utf8",'root','');
}

catch (PDOExpception $e) {

  echo $e->getMessage();
  exit();
}
}
?>
