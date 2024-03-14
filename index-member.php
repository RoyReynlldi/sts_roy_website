<?php
    session_start();
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">
        
        <?php
            if($_SESSION['status']!="login"){
                header("location:login.php?msg=belum_login");
            } else{
                include("sidebar-member.php");
            }
        ?>

        <div id="content-wrapper" class="d-flex flex-column bg-gradient-light">

            <div id="content">

                <nav class="navbar navbar-expand navbar-dark bg-light topbar mb-4 static-top shadow">
                    <div class=" container justify-content-end">
                        <a href="logout.php"><button type="button" class="btn btn-outline-info">Log Out</button></a>
                    </div>
                </nav>

        <div class="container-fluid ">
            <h1 class="text-dark pb-5">Dashboard Member</h1>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4 pb-3">Halo Roy </h1>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="resource/img/1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="resource/img/2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="resource/img/3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
            
        </div>
                </div>
            </div>
            
        </div>

        </div>

    </div>

    <!-- Scroll to Top Button-->
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
