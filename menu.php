<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Menu</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<a href="cari.php">Cari</a>
		<a href="login.php">Login</a>
		<form action="hasil.php" action="POST">
			<input type="text" name="nama" placeholder="Nama Lengkap">
			<input type="email" name="email" placeholder="Email">
			<select name="jk" id="jk">
				<option value="">Jenis Kelamin</option>
				<option value="Laki-laki">L</option>
				<option value="Perepmuan">P</option>
			</select>
			<select name="jurusan" id="Jurusan">
				<option value="">Jurusan</option>
				<option value="Akuntansi">Akuntansi</option>
				<option value="Komputer Jaringan">Komputer Jaringan</option>
				<option value="Otomotif">Otomotif</option>
			</select>
			<input type="submit" value="Test">
		</form>
	</body>
</html>