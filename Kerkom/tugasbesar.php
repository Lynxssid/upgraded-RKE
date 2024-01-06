<html>

<head>
	<title> Sistem Informasi Kesehatan </title>
</head>

<body>
<center>
<h1>Login Klinik Sehat</h1>
<br>
<form action="login.php" method="get">
	Username <input type="text" name="user">
	<br><br>
	Password <input type="text" name="pass">
	<br><br>
	<input type="submit" value="Login">
</form>

<h4>Sistem Informasi <font color="red">Klinik Sehat</font></h4>

<?php
	if(isset($_GET["login_gagal"])){
		echo "Username atau Password salah!";
	}
?>

</center>
</body>

</html>