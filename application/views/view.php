<!doctype html>
<html lang="en">
<head>
	<title>Rekap Berat Badan Anda Sekarang!!!</title>
</head>
<body>
	<center><h1>Rekap Berat Badan Anda Sekarang Juga!!!</h1></center>
	<center><?php echo anchor('controller/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Id</th>
			<th>Tanggal</th>
			<th>Max</th>
			<th>Min</th>
			<th>Perbedaan</th>
			<th>Aksi</th>
		</tr>
		
	<?php 
		$id = 1;
		$maxTotal=0;
		$minTotal=0;
		$diffTotal=0;
		$countData=0;
		foreach($sirclo as $u){
			$countData++;
			$maxTotal+=$u->Max;
			$minTotal+=$u->Min;
			$diffTotal+=$u->Perbedaan;	 
		?>
		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo $u->Tanggal ?></td>
			<td><?php echo $u->Max ?></td>
			<td><?php echo $u->Min ?></td>
			<td><?php echo $u->Perbedaan ?></td>
			<td>
			     <?php echo anchor('controller/edit/'.$u->id,'Edit'); ?>
                 <?php echo anchor('controller/view/'.$u->id,'View'); ?>
                 <?php echo anchor('controller/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>

		<?php 
	} 
		?>

		<tr>
			<th>Rata-rata</th>
			<th>-</th>
			<th><?php echo ($countData==0)?0:$maxTotal/$countData;?></th>
			<th><?php echo ($countData==0)?0:$minTotal/$countData;?></th>
			<th><?php echo ($countData==0)?0:$diffTotal/$countData;?></th>
			<th>-</th>
		</tr>
	</table>
</body>
</html>
