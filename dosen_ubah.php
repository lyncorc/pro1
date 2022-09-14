<?php 

require 'koneksi.php';


// ambil data di url
$id = $_GET["id"];

$result = mysqli_query($koneksi, "SELECT * FROM m_dosen WHERE no_urut_dosen = $id");



// apakah tombol submit sudah pernah terpakai atau belum
if (isset($_POST["submit"])) {


	$no_urut_dosen = htmlspecialchars($_POST["no_urut_dosen"]);
	$nm_dosen = htmlspecialchars($_POST["nm_dosen"]);
	$nidn_dosen = htmlspecialchars($_POST["nidn_dosen"]);
	$jenis_klmn_dosen = htmlspecialchars($_POST["jenis_klmn_dosen"]);
    $kd_jabatab_dosen = htmlspecialchars($_POST["kd_jabatab_dosen"]);
	$status_dosen = htmlspecialchars($_POST["status_dosen"]);


	mysqli_query($koneksi, "UPDATE m_dosen SET
	nm_dosen = '$nm_dosen',
	nidn_dosen = '$nidn_dosen',
	jenis_klmn_dosen = '$jenis_klmn_dosen',
	kd_jabatab_dosen = '$kd_jabatab_dosen',
    status_dosen = '$status_dosen'
	WHERE no_urut_dosen = '$no_urut_dosen'
	");



// cek apakah data berhasil diubah atau tidak
if( mysqli_affected_rows($koneksi) > 0){
	echo "<script>
	alert('Data Berhasil Diubah');
	document.location.href = 'dosen.php';
	</script>";
} else {
	echo "<script>
	alert('Data gagal Diubah');
	document.location.href = 'dosen.php';
	</script>";

}
}
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/dashboard.css">
    <script src="asset/js/jquery-3.2.1.slim.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/popper.min.js"></script>

    <title>Halaman Karyawan</title>

</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Aplikasi</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout.php">Log out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="dosen.php">
                                <span data-feather="file"></span>
                                Data Dosen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="libur.php">
                                <span data-feather="shopping-cart"></span>
                                Data Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shift.php">
                                <span data-feather="users"></span>
                                Data Prodi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parameter_ubah.php">
                                <span data-feather="users"></span>
                                Data Semester
                            </a>
                        </li>


                    </ul>


                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			<form action="" method="post">
				<ul>
					<?php	
				while( $data = mysqli_fetch_array($result)) :
				?>
					<li>
						<label for="nik">No Urut Dosen :</label>
						<input type="text" name="no_urut_dosen" class="form-control"  id="no_urut_dosen" required value="<?= $data["no_urut_dosen"] ?>">
					</li>
					<li>
						<label for="nama_karyawan">Nama Dosen :</label>
						<input type="text" name="nm_dosen" class="form-control" id="nm_dosen" value="<?= $data["nm_dosen"] ?>">
					</li>
					<li>
						<label for="area">NIDN :</label>
						<input type="text" name="nidn_dosen" id="nidn_dosen" class="form-control" value="<?= $data["nidn_dosen"] ?>">
					</li>
					<li>
						<label for="plotting">Jenis Kelamin :</label>
						<input type="text" name="jenis_klmn_dosen" class="form-control" id="jenis_klmn_dosen" value="<?= $data["jenis_klmn_dosen"] ?>">
					</li>
                    <li>
						<label for="area">Kode Jabatan :</label>
						<input type="text" name="kd_jabatab_dosen" id="kd_jabatab_dosen" class="form-control" value="<?= $data["kd_jabatab_dosen"] ?>">
					</li>
					<li>
						<label for="plotting">Status :</label>
						<input type="text" name="status_dosen" class="form-control" id="status_dosen" value="<?= $data["status_dosen"] ?>">
					</li>
					<br>
					<li>
						<button text="submit" name="submit">Ubah</button>
					</li>
					<?php endwhile; ?>
				</ul>
				


			</form>
               







            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

</body>

</html>