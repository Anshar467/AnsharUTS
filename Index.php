<!DOCTYPE html>
<html lang="en">
<head>
  <title>MySite</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/Custom.css">
  <script type="text/javascript" src="js/query"></script>
  <script type="text/javascript" src="js/boostrap.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:500">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

  <script type="text/javascript">
    $(window).on('scroll',function() {
      if($(window).scrollTop()){
        $('nav').addClass('black');
      }
      else {
        $('nav').removeClass('black');
      }
    })
  </script>
</head>
<body>
    <?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:Index.php?pesan=belum_login");
  }?>

  <div class="wrapper">
    <nav>
      <div class="logo">CRAFT</div>
      <ul>
        <li ><a href="index.php?page=beranda" title="Beranda">Home</a></li>
        <li ><a href="index.php?page=profilku" title="Profilku">Profile</a></li>
        <li ><a class="active" href="logout.php" title="Logout">Log Out</a></li>
      </ul>
    </nav>

    <img class="sec1" src="media/Lima.jpg">
    <br><br>
  </div>

   <div class="navcontent konten col-lg-8">
     <?php
     if ( $_GET['page'] == 'beranda') {

         include "Config.php";
     }
     else
     {
         include "Config.php";
     }
     ?>
  </div>

  <div class="content-sidebar col-lg-4">
    <div class="dah-sidebar">
      <div class="sidebar-content">
          <img class="table-gambar" src="media/My.jpg" width="400px" height="350px;">
          <br><br><br><br><br><br>
      </div>
    </div>
  </div>

</body>
</html>
