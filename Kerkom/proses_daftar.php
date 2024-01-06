
<?php
session_start();
if (isset($_SESSION['user'])){
?>

<html>
<head>
	<title>Form Pendaftaran Pasien Baru</title>
</head>
<body>
<center>
<table width="100% border="0" align="center">
	<tr align="center">
		<td><a href="home.php">HOME</a></td>
			<td><a href="pendaftaran.php">PENDAFTARAN</a></td>
			<td><a href="logout.php">LOGOUT</a></td>
	</tr>
</table>
<hr>
<h1>Pendaftaran Berhasil!</h1>
<?php
	$nama = $_GET['nama'];
	$lahir = $_GET['lahir'];
	$alamat = $_GET['alamat'];
	$email = $_GET['email'];
	$jkelamin = $_GET['jkelamin'];
	
	echo "Nama Pasien: $nama<br>";
	echo "Tanggal Lahir: $lahir<br>";
	echo "Alamat: $alamat<br>";
	echo "Email: $email<br>";
	echo "Jenis Kelamin: $jkelamin<br>";	
?>
</center>
</body>
</html>

<?php
}
?>