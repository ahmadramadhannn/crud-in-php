<?php 
require 'functions.php';
$karyawan = query("SELECT * FROM datakaryawan");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
</head>
<body>
	
	<h1>Daftar Karyawan</h1>
	<a href="tambah.php">Tambah data karyawan</a>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Tanggal Masuk</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach($karyawan as $row) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda yakin?')">hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
			<td><?= $row["nik"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["jabatan"]; ?></td>
			<td><?= $row["tanggal_masuk"]; ?></td>
		</tr>
		<?php $i++; ?>
	    <?php endforeach ?>
	</table>

</body>
</html>