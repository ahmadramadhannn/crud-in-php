<?php 
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	# code...
	
	
	// cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0) {
		# code...
		echo "
			<script>
				alert('selamat data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
		<script>
			alert('yahh data gagal ditambahkan');
			document.location.href = 'index.php';
		</script>
		";
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah data karyawan</title>
	<style>
		ul li {
			list-style: none;
		}
	</style>
</head>
<body>
	<h1>Tambah data karyawan</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="jabatan">Jabatan :</label>
				<input type="text" name="jabatan" id="jabatan" required>
			</li>
			<li>
				<label for="nik">NIK :</label>
				<input type="text" name="nik" id="nik" required>
			</li>
			<li>
				<label for="tanggal_masuk">Tanggal Masuk :</label>
				<input type="text" name="tanggal_masuk" id="tanggal_masuk" required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>