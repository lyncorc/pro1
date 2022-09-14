<?php 

//error_reporting(0);
require 'koneksi.php';
$querry_data = mysqli_query($koneksi, "SELECT * FROM m_dosen");

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

    <title>Halaman Dosen</title>

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
                <div class="row">
                    <div class="col-md-12">
                        <a href="dosen_tambah.php" class="btn btn-info">Tambah Data Dosen</a>
                        


                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Urut Dosen</th>
                                        <th>Nama Dosen</th>
                                        <th>Nidn Dosen</th>
                                        <th>Kode Jabatan Dosen</th>
                                        <th>Status Dosen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                    $nomor=1;

                                    if(mysqli_num_rows($querry_data)){


                                    while( $row = mysqli_fetch_assoc($querry_data)){



                                    ?>
                                    <tr>
                                        <td><?= $row["no_urut_dosen"]; ?></td>
                                        <td><?= $row["nm_dosen"]; ?></td>
                                        <td><?= $row["nidn_dosen"]; ?></td>
                                        <td><?= $row["jenis_klmn_dosen"]; ?></td>
                                        <td><?= $row["kd_jabatab_dosen"]; ?></td>
                                        <td><?= $row["status_dosen"]; ?></td>
                                        <td>
                                            <a href="dosen_ubah.php?id=<?= $row["no_urut_dosen"]; ?>">ubah</a> |
                                            <a href="dosen_hapus.php?id=<?= $row["no_urut_dosen"]; ?>"
                                                onclick="return confirm('yakin ?')">hapus</a>
                                        </td>
                                    </tr>
                                    <?php  }}else{
                                            echo '<tr><td colspan="6" align="center"><i>Data Tidak Ditemukan</i></td></tr>';
                                        } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>








            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

</body>

</html>