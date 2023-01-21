<?php
    if (!defined('INDEX'))die("");

    $status = $_POST['status_siswa'];
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama_lengkap'];
    $jk = $_POST['jk'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $transportasi = $_POST['transportasi'];
    $tinggal = $_POST['tinggal'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $nama_ayah = $_POST['nama_ayah'];
    $thn_ayah = $_POST['thn_lahir_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $thn_ibu = $_POST['thn_lahir_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $no_telp_ortu = $_POST['no_telp_ortu'];
    $alamat_ortu = $_POST['alamat_ortu'];
    $sekolah_smp = $_POST['sekolah_smp'];
    $alamat_smp = $_POST['alamat_sekolah_smp'];
    $sekolah_sd = $_POST['sekolah_sd'];
    $alamat_sd = $_POST['alamat_sekolah_sd'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];
    $jml_saudara = $_POST['jml_saudara'];
    $anak_ke = $_POST['anak_ke'];
    
    $query = mysqli_query($conn, "INSERT INTO data_ppdb VALUES(
    '',
    '$status','$jurusan','$nama','$jk','$nisn','$nik','$tempat_lahir',
    '$tanggal_lahir','$agama','$alamat','$rt','$rw','$kelurahan','$kecamatan',
    '$kabupaten','$provinsi','$transportasi','$tinggal','$no_telp','$email',
    '$nama_ayah','$thn_ayah','$pekerjaan_ayah','$pendidikan_ayah',
    '$penghasilan_ayah','$nama_ibu','$thn_ibu','$pekerjaan_ibu','$pendidikan_ibu',
    '$penghasilan_ibu','$no_telp_ortu','$alamat_ortu','$sekolah_smp',
    '$alamat_smp','$sekolah_sd','$alamat_sd','$tb','$bb','$jml_saudara','$anak_ke')");
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
                            echo "<meta http-equiv='refresh', content='2; url=?hal=input data ppdb'>";
                        }else{
                            echo "Tidak dapat menyimpan data";
                            echo "<meta http-equiv='refresh', content='2; url=?hal=input data ppdb'>";
                        }
                    ?>    
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>