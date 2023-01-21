<?php
    if(!defined('INDEX')) die("");
?>
<title>Dashboard</title>
<!-- content wrapper contains page content -->
<div class="content-wrapper">
    <!-- content header (page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="jumbotron mt-0 bg-gray">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM user ORDER BY id");
                $no = 0;
                while($data = mysqli_fetch_array($query)){
                $no++; ?>
                <p style="font-size: 45px; font-family: Comic Sans MS; font-weight:bold;" class="">Hai, <?= $data['nama'];?><i class="far fa-smile-wink"></i></p>
                <p style="font-size: 30px; font-family: Comic Sans MS; font-weight:bold;" class="display-4">Selamat Datang di Aplikasi Penerimaan Peserta Didik Baru</p>
                <p style="font-size: 30px; font-family: Comic Sans MS; font-weight:bold;">Anda Login Sebagai <?= $data['jabatan'];?><?php }?></p>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <?php
    $jml_data_ppdb = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_ppdb"));
    $tkro = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_ppdb WHERE jurusan='TKRO' "));
    $tkj = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_ppdb WHERE jurusan='TKJ' "));
    $akl = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_ppdb WHERE jurusan='AKL' "));
    $l = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_ppdb WHERE jenis_kelamin='Laki - laki' "));
    $p = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_ppdb WHERE jenis_kelamin='Perempuan' "));
    ?>
    <!-- main content --> 
    <section class="content">
        <div class="container-fluid">
            <!-- info boxes -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $jml_data_ppdb?></h3>
                            <p>Jumlah Calon Peserta Didik Baru</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More Info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $tkro?></h3>
                            <p>TKRO</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More Info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $tkj?></h3>
                            <p>TKJ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More Info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $akl?></h3>
                            <p>AKL</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More Info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= $l?></h3>
                            <p>Jumlah Laki - Laki</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <a href="" class="small-box-footer">
                            More Info <i class="fas fa-arrow-alt-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $p?></h3>
                            <p>Jumlah Perempuan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <a href="" class="small-box-footer">
                            More Info <i class="fas fa-arrow-alt-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- info boxes -->
        </div>
    </section><!-- main content -->
</div>
