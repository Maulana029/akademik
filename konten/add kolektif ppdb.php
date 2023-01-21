<?php
    if (!defined('INDEX'))die("");

    $nama = $_POST['nama_lengkap'];
    $keterangan = $_POST['keterangan'];
    $jml_formulir_keluar = $_POST['jml_formulir_keluar'];
    $tgl_formulir_keluar = $_POST['tgl_formulir_keluar'];
    $jml_formulir_masuk = $_POST['jml_formulir_masuk'];
    $tgl_formulir_masuk = $_POST['tgl_formulir_masuk'];
    $no_wa = $_POST['no_telp_kolektif'];

    $query = mysqli_query($conn, "INSERT INTO data_kolektif_ppdb VALUES(
    '','$nama','$keterangan','$jml_formulir_keluar',
    '$tgl_formulir_keluar','$jml_formulir_masuk','$tgl_formulir_masuk',
    '$no_wa')");
    
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                    <?php
                        if($query){
                            echo "Data Berhasil Disimpan";
                            echo "<meta http-equiv='refresh', content='2; url=?hal=data kolektif ppdb'>";
                        }else{
                            echo "Tidak dapat menyimpan data";
                            echo "<meta http-equiv='refresh', content='2; url=?hal=data kolektif ppdb'>";
                        }
                    ?>    
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>