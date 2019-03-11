<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data</title>
</head>
<body>
	<center>
		<h1>Rekap Berat Badan Anda!!!</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/controller/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>Max</td>
				<td><input type="text" name="max"></td>
			</tr>
			<tr>
				<td>Min</td>
				<td><input type="text" name="min"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>

</html>