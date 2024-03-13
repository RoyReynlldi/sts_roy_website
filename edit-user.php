<?php
    include "database.php";
    $data=editData("user",$_GET['id']);

    if(isset($_POST['edit'])) {
        mysqli_query($connect, "update user set
        no_identitas = '$_POST[no_identitas]',
        nama = '$_POST[nama]',
        status = '$_POST[status]',
        username = '$_POST[username]',
        password = '$_POST[password]',
        role = '$_POST[role]'
        where id = '$_GET[id]'");

        header("location:user.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit User</title>

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
            session_start();
            if($_SESSION['status']!="login"){
                header("location:login.php?msg=belum_login");
            } else{
                include("sidebar.php");
            }
        ?>

        <div id="content-wrapper" class="d-flex flex-column bg-gradient-light">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">
                    <div class=" container justify-content-end">
                        <a href="logout.php"><button type="button" class="btn btn-outline-success">Log Out</button></a>
                    </div>
                </nav>

        <div class="container-fluid">
        <h1 class="h3 mb-4 text-dark">Edit Data User</h1>
            <?php while($user = mysqli_fetch_array($data)): ?>
            <form class="user" method="POST">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="No Identitas" name="no_identitas" value="<?php echo $user['no_identitas']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Nama" name="nama" value="<?php echo $user['nama']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Status" name="status" value="<?php echo $user['status']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Username" name="username" value="<?php echo $user['username']; ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" placeholder="Password" name="password" value="<?php echo $user['password']; ?>">
                </div>
                <div class="form-group pb-1">
                    <input type="text" class="form-control form-control-user" placeholder="Role" name="role" value="<?php echo $user['role']; ?>">
                </div>
                <input type="submit" name="edit" class="btn btn-success btn-user btn-block">
            </form>
            <?php endwhile; ?>
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