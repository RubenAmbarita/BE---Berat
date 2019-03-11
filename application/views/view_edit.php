<!doctype html>
<html lang="en">
<head>
	<title>Edit Data</title>
</head>
<body>
	<center>
		<h1>Rekap Berat Badan Anda!</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($sirclo as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/controller/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Tanggal</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="date" name="tanggal" value="<?php echo $u->Tanggal ?>">
				</td>
			</tr>
			<tr>
				<td>Max</td>
				<td><input type="text" name="max" value="<?php echo $u->Max ?>"></td>
			</tr>
			<tr>
				<td>Min</td>
				<td><input type="text" name="min" value="<?php echo $u->Min ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>