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
<table width="100%" border="0" align="center">
	<tr align="center">
		<td><?php echo "Halo, $_SESSION[user]";?></td>
		<td><a href="home.php">HOME</a></td>
		<td><a href="pendaftaran.php">PENDAFTARAN</a></td>
		<td><a href="logout.php">LOGOUT</a></td>
	</tr>
</table>
<hr>
<h2>Form Pendaftaran Pasien Baru</h2>
	<form action="proses_daftar.php" method="get">
		<table>
			<tr>
				<td>Nama Lengkap:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
					<td>
						<select name="jkelamin">
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir:</td>
				<td><input type="date" name="lahir" required></td>
			</tr>
			<tr>
				<td>Alamat:</td>
				<td><textarea name="alamat" rows="5" required></textarea></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Daftar">
	</form>
</center>
</body>
</html>

<?php
}
?>