<?php
    session_start();
    ob_start();
    include '../config/config.php';
    if(empty($_SESSION['email']) or empty($_SESSION['password'])){
        echo "<p>Login Dulu ya</p>";
        echo "<meta http-equiv='refresh' content='0.1 url=login.php'>";
    }else{
        define('INDEX', true);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" href="../dist/img/logo-smk.png">
</head>
<body class="hold-transiton light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm text-bold" style="font-family: 'Comic Sans MS';">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../dist/img/logo-smk.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" data-widget="pushmenu" role="button" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="nav-link">
                        <script>
                            var months=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                            var myDays=["Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay();
                            thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000)?yy + 1900:yy;
                            document.write(thisDay+', '+day+' '+months[month]+' '+year)
                        </script>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <p>/</p>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <p id="clock"></p>
                            <script>
                                setInterval(customClock, 500);
                                    function customClock() {
                                        var time = new Date();
                                        var hrs = time.getHours();
                                        var min = time.getMinutes();
                                        var sec = time.getSeconds();
                                        document.getElementById('clock').innerHTML = hrs + " : " + min + " : " + sec;
                                }                               
                            </script>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                        <i class="fas fa-database"></i>
                        Update</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <p>
                        <i class="fas fa-user"></i>
                        Hai, 
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM user ORDER BY nama DESC");
                        $no = 0;
                        while ($data = mysqli_fetch_array($query)) {
                            $no++?>
                            <?= $data['nama'];?>
                        <?php }?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-widget="fullscreen" role="button">
                        <p>
                        <i class="fas fa-expand-arrows-alt"></i>
                        Full Screen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">
                        <p>
                        <i class="fa fa-sign-out-alt"></i>
                        keluar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="" class="brand-link ">
                <img src="../dist/img/logo-smk.png" class="brand-image img-circle elevation-2" alt="User Image">
                <span class="brand-text font-weight-light text-sm text-bold">PPDB SMK Attaqwa 05</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="?hal=dashboard" class="nav-link active">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?hal=input data ppdb" class="nav-link">
                                <i class="fas fa-user-graduate"></i>
                                <p>Input Data PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?hal=data ppdb" class="nav-link">
                                <i class="fas fa-book"></i>
                                <p>Data PPDB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?hal=data kolektif ppdb" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>Data Kolektif PPDB</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <?php include '../konten/konten.php';?>      
            <!-- <aside class="control-sidebar control-sidebar-dark"></aside> -->
        </div>
    </div>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../dist/js/adminlte.js"></script>
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="../dist/js/pages/dashboard2.js"></script>
<script src=""></script>
</body>
</html>