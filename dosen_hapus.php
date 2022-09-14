<?php 

require 'koneksi.php';

$id = $_GET["id"];

	
	mysqli_query($koneksi, "DELETE FROM m_dosen WHERE no_urut_dosen = $id");



if( mysqli_affected_rows($koneksi) > 0) {
	echo "
	<script>
	alert('Data Berhasil Dihapus');
	document.location.href = 'dosen.php';
	</script>";
} else {
	echo "<script>
	alert('Data gagal Dihapus');
	document.location.href = 'dosen.php';
	</script>";

}

 ?>