<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';

switch($page){
  case 'beranda':
  include "Beranda.php";
  break;

  case 'profilku':
  include "Profilku.php";
  break;
  
  default:
  include "Beranda.php";
}
?>
