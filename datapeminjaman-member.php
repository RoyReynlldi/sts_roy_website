<?php
require_once('database.php');
$data = showdataPeminjaman();
$nomor = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Peminjaman Page</title>
    <!-- Custom fonts for this template-->
    <link href="resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php
        session_start();
        if ($_SESSION['status'] != "login") {
            header("location:login.php?msg=belum_login");
        } else {
            include("sidebar-member.php");
        }
        ?>
        <div id="content-wrapper" class="d-flex flex-column bg-gradient-light">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">
                    <div class="container justify-content-end">
                        <a href="logout.php"><button type="button" class="btn btn-outline-info">Log Out</button></a>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-dark">Table Data Peminjaman</h1>
                    <div class="card shadow text-dark bg-light mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Identitas</th>
                                            <th>Kode Barang</th>
                                            <th>Jumlah</th>
                                            <th>Keperluan</th>
                                            <th>Status</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $peminjaman) : ?>
                                            <?php $nomor++; ?>
                                            <tr>
                                                <th scope="row"><?php echo "$nomor"; ?></th>
                                                <td><?php echo "$peminjaman[no_identitas]"; ?></td>
                                                <td><?php echo "$peminjaman[kode_barang]"; ?></td>
                                                <td><?php echo "$peminjaman[jumlah]"; ?></td>
                                                <td><?php echo "$peminjaman[keperluan]"; ?></td>
                                                <td><?php echo "$peminjaman[status]"; ?></td>
                                                <td><?php echo "$peminjaman[tgl_pinjam]"; ?></td>
                                                <td>
                                                    <?php if ($peminjaman['tgl_kembali'] == NULL) : ?>
                                                        <form action="pengembalian.php" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $peminjaman['id']; ?>">
                                                            <button type="submit" name="kembali" class="btn btn-info">Kembali</button>
                                                        </form>
                                                    <?php else: ?>
                                                        <?php echo "$peminjaman[tgl_kembali]"; ?>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="resource/vendor/jquery/jquery.min.js"></script>
    <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="resource/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="resource/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="resource/js/demo/chart-area-demo.js"></script>
    <script src="resource/js/demo/chart-pie-demo.js"></script>
</body>
</html>
