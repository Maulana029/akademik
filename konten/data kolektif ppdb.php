<?php
    if(!defined('INDEX')) die("");
?>
<title>Data Kolektif PPDB</title>
<div class="content-wrapper">
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kolektif PPDB</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?hal=data ppdb">Home</a></li>
                        <li class="breadcrumb-item">Data Kolektif PPDB</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Kolektif PPDB</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i> Tambah Data</button>
                            <button onclick="window.open('export kolektif ppdb excel.php')" class="btn btn-success btn-sm" id="excel"><i class="fas fa-file-excel"></i> Export Excel</button>
                            <button onclick="window.open('export kolektif ppdb.php')" class="btn btn-warning btn-sm" id="pdf"><i class="fa fa-print"></i> Print</button>
                            <div class="float-right">
                                <form action="" method="get">
                                    <div class="form-group">
                                        <div class="input-group">      
                                            <input type="search" class="form-control text-sm" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn bt-lg btn-default">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm text-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Keterangan</th>
                                    <th>Jml Formulir Keluar</th>
                                    <th>Tgl Formulir Keluar</th>
                                    <th>Jml Formulir Masuk</th>
                                    <th>Tgl Formulir Masuk</th>
                                    <th>No. WhastApp</th>
                                    <th><i class="fas fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($conn, "SELECT * FROM data_kolektif_ppdb ORDER BY id DESC");
                                    $no = 0;
                                    while($data = mysqli_fetch_array($query)){
                                        $no++
                                ?>
                                <tr>
                                    <td><?= $no;?></td>
                                    <td><?= $data['nama_lengkap'];?></td>
                                    <td><?= $data['keterangan']?></td>
                                    <td><?= $data['jml_formulir_keluar']?></td>
                                    <td><?= $data['tgl_formulir_keluar']?></td>
                                    <td><?= $data['jml_formulir_masuk']?></td>
                                    <td><?= $data['tgl_formulir_keluar']?></td>
                                    <td><?= $data['no_telp_kolektif']?></td>
                                    <td>
                                        <a href="" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>
                                        <a href="hapus data kolektif ppdb.php?id= <?= $data['id']?>" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="?hal=add kolektif ppdb" method="post">
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Input Data Kolektif PPDB</h4>
                <button type="button" class=" close" data-dismiss="modal" aria-label=" close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6 text-sm">
                        <div class="form-group">
                            <input type="text"  name="nama_lengkap" class="form-control" required="true" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <input type="text" name="keterangan" class="form-control" required="true" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <input type="number" name="jml_formulir_keluar" class="form-control" required="true" placeholder="Jumlah Formulir Keluar">
                        </div>
                        <div class="form-group">
                            <input type="date" name="tgl_formulir_keluar" class="form-control" required="true" placeholder="Tanggal Formulir Keluar">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="number" name="jml_formulir_masuk" class="form-control" required="true" placeholder="Jumlah Formulir Masuk">
                        </div>
                        <div class="form-group">
                            <input type="date" name="tgl_formulir_masuk" class="form-control" required="true" placeholder="Tanggal Formulir Masuk">
                        </div>
                        <div class="form-group">
                            <input type="number" name="no_telp_kolektif" class="form-control" required="true" placeholder="No. Telp / WhastApp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" value="Save Changes" class="btn btn-info">
            </div>
        </div>
    </div>
</div>
</form>
