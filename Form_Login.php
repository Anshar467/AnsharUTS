<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="Style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

  <div id="kotak">
	<div id="atas">Administrator</div>
		<div id="bawah">
		<?php
		if(isset($_GET['pesan']))
		{
			if($_GET['pesan'] == "gagal")
			{
				echo "<center>Login Gagal !</center>";
			}
			else if($_GET['pesan'] == "logout")
			{
				echo "<center>Logout Berhasil !</center>";
			}
			else if($_GET['pesan'] == "belum_login")
			{
				echo "Login Terlebih Dahulu !";
			}
		}
		?>
	<br/>
	<form method="post" action="Form_Login_Proses.php">
		<input class="masuk" type="text" name="Username" placeholder="Username .."><br><br>
		<input class="masuk" type="password" name="Password" placeholder="Password .."><br><br>
		<input id="tombol" class="" type="submit" name="submit" value="LOGIN">
	</form>

    </div>
  </div>
</body>
</html>
