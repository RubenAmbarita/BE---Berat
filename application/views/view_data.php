<!doctype html>
<html lang="en">
<head>
	<title>Rekap Berat Badan Anda Sekarang!!!</title>
</head>
<body>
	<center><h1>Rekap Berat Badan Anda Sekarang Juga!!!</h1></center>
	<center><h3>View Data</h3></center>
	
	<table style="margin:20px auto;" border="1">
	<?php 
		$id = 1;
		foreach($sirclo as $u){ 
		?>
		<tr>
			<th>Tanggal</th>
			<td><?php echo $u->Tanggal ?></td>
		</tr>
		<tr>
			<th>Max</th>
			<td><?php echo $u->Max ?></td>
		</tr>
		<tr>
			<th>Min</th>
			<td><?php echo $u->Min ?></td>
		</tr>
		<tr>
			<th>Perbedaan</th>
			<td><?php echo $u->Perbedaan ?></td>
		</tr>	
		<?php 
	} 
		?>
	</table>
</body>
</html>
