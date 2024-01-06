<?php
session_start();
if (isset($_SESSION['user'])){
?>

<center>
<table width="100%" border="0">
	<tr align="center">
		<td><?php echo "Halo, $_SESSION[user]";?></td>
		<td><a href="home.php">HOME</a></td>
		<td><a href="pendaftaran.php">PENDAFTARAN</a></td>
		<td><a href="logout.php">LOGOUT</a></td>
	</tr>
</table>
<hr>
<h1>Selamat Datang di Klinik Sehat!</h1>
</center>

<?php
}
?>