<!DOCTYPE html>
<html>
<head>
	<title>Form Login dan css</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	
  <div id="kotak">
	<div id="atas">PENDAFTARAN</div>
		<div id="bawah">
	<br/>
	
	<form method="post" action="form_login_proses.php">
		<table class="table table-kontak">
			<tr>
				<td rowspan="1">Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td valign="top">Pertanyaan</td>
				<td valign="top">:</td>
				<td><textarea rows="10" cols="20" required name="pertanyaan"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input class="button" type="submit" name="kirim" value="kirim" required></td></td>
			</tr>
		</table>
		<input id="tombol" class="" type="submit" name="submit" value="LOGIN">
		<center>
		<a href="">Sign Up</a>
		</center>
	</form>

    </div>
  </div>
</body>
</html>