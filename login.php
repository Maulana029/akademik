<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Passwrod">
		<select name="jk" id="jk">
			<option value="">Jenis Kelamin</option>
			<option value="Laki-laki">L</option>
			<option value="Perepmuan">P</option>
		</select>
		<input type="submit" value="Test">
		<a href="cari.php">Cari</a>
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
	    	echo "Username : <b>$_POST[username]</b><br>";
	    	echo "Password : <b>$_POST[password]</b><br>";
	    	echo "Password : <b>$_POST[jk]</b><br>";
		}
	?>
</body>
</html>