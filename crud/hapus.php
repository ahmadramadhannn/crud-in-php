<?php 
require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
	# code...
	echo "
		<script>
		 alert('data berhasil dihapus nih');
		document.location.href = 'index.php';
		</script>
	";
} else {
	echo " 
		 <script>
		 alert('yahh data gagal dihapus nih');
		document.location.href = 'index.php';
		</script>
		";
}

?>