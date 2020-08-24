<?php 

$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		
		$rows[] = $row;
	}
	return $rows;
}
function tambah($data)
{
	// ambil data dari tiap elemen dalam form
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$nik = htmlspecialchars($data["nik"]);
	$tanggal_masuk = htmlspecialchars($data["tanggal_masuk"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO datakaryawan 
			  VALUES 
			  ('','$nama','$jabatan','$nik','$tanggal_masuk','$gambar')";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);	

}
function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM datakaryawan WHERE id = $id");

	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	// ambil data dari tiap elemen dalam form
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$nik = htmlspecialchars($data["nik"]);
	$tanggal_masuk = htmlspecialchars($data["tanggal_masuk"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "UPDATE datakaryawan SET
			 nama = '$nama',
			 jabatan = '$jabatan',
			 nik = '$nik',
			 tanggal_masuk = '$tanggal_masuk',
			 gambar = '$gambar'
			 WHERE id = $id
			 ";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}
?>