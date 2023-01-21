<?php
    if(!defined('INDEX')) die("");
?>
<title>Input Data PPDB</title>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Input Data PPDB</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
                        <li class="breadcrumb-item">Input Data PPDB</li>
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
                        <h3 class="card-title">Data PPDB</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i> Tambah Data</button>
                            <button onclick="window.open('export input data ppdb excel.php')" class="btn btn-success btn-sm" id="excel"><i class="fas fa-file-excel"></i> Export Excel</button>
                            <button onclick="window.open('export input data ppdb.php')" class="btn btn-warning btn-sm" id="csv"><i class="fa fa-print"></i> Print</button>
                            <div class="float-right">
                                    <form action="" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="kata" class="form-control text-sm" placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" name="button" class="btn bt-lg btn-default">
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
                                    <th>Status</th>
                                    <th>Nama Lengkap</th>
                                    <th>Asal Sekolah SMP / MTs</th>
                                    <th>Jurusan</th>
                                    <th>No. Telp / WhastApp</th>
                                    <th><i class="fas fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $cari = $_POST['kata'];
                                    if($cari != ''){
                                        $query = mysqli_query($conn, "SELECT * FROM data_ppdb WHERE nama_lengkap LIKE '" . $cari . "'");
                                    }else{
                                        $query = mysqli_query($conn, "SELECT * FROM data_ppdb");
                                    }  
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no++; ?>
                                <tr>
                                    <td><?= $no;?></td>
                                    <td><?= $data['status_siswa'];?></td>
                                    <td><?= $data['nama_lengkap'];?></td>
                                    <td><?= $data['sekolah_smp'];?></td>
                                    <td><?= $data['jurusan'];?></td>
                                    <td><?= $data['no_telp']?></td>
                                    <td>
                                        <a href="print input data ppdb.php?id= <?= $data['id']?>" class="btn btn-success btn-xs"><i class="fas fa-print"></i></a>
                                        <a href="<?= $data['id']?>" name="ubahdata" data-target="#updateuser<?= $data['id']?>" data-toggle="modal" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
                                        <!-- <button type="submit"  class="btn btn-info btn-xs"><i class="fas fa-edit"></i></button> -->
                                        <a href="hapus data ppdb.php?id= <?= $data['id']?>" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>

<?php 
    $select = mysqli_query($conn, "SELECT * FROM data_ppdb");
    while($data = mysqli_fetch_array($select)){
?>
<form action="../admin/update data.php" method="POST">
<div class="modal fade" id="updateuser<?= $data['id']?>" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Kolektif PPDB</h4>
                <button type="button" class=" close" data-dismiss="modal" aria-label=" close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="id" value="<?= $data['id']?>">
                    <div class="col-6 text-sm">
                        <div class="form-group">
                            <select name="status_siswa" class="form-control">
                                <?php
                                    if($data['status_siswa'] == "Siswa Baru") 
                                    echo "<option value='Siswa Baru' selected>Siswa Baru</option>";
                                    else 
                                    echo "<option value='Siswa Baru'>Siswa Baru</option>";
                                    if ($data['status_siswa'] == "Pindahan")
                                    echo "<option value='Pindahan' selected>Pindahan</option>";
                                    else 
                                    echo "<option value='Pindahan'>Pindahan</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select for="jurusan" name="jurusan" id="jurusan" class="form-control">
                                <?php
                                    if($data['jurusan'] == "AKL") 
                                    echo "<option value='AKL' selected>Akuntansi dan Keuangan Lembaga</option>";
                                    else 
                                    echo "<option value='AKL'>Akuntansi dan Keuangan Lembaga</option>";
                                    if ($data['jurusan'] == "TKJ")
                                    echo "<option value='TKJ' selected>Teknik Komputer dan Jaringan</option>";
                                    else 
                                    echo "<option value='TKJ'>Teknik Komputer dan Jaringan</option>";
                                    if ($data['jurusan'] == "TKRO")
                                    echo "<option value='TKRO' selected>Teknik Kendaraan Ringan Otomotif</option>";
                                    else 
                                    echo "<option value='TKRO'>Teknik Kendaraan Ringan Otomotif</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama_lengkap" class="form-control" required="true" placeholder="Nama Lengkap" value="<?= $data['nama_lengkap']?>">
                        </div>
                        <div class="form-group">
                            <select name="jenis_kelamin" for="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <?php
                                if ($data['jenis_kelamin'] == "Laki - laki")
                                    echo "<option value='Laki - laki' selected>Laki - laki</option>";
                                else 
                                    echo "<option value='Laki - laki'>Laki - laki</option>";

                                if ($data['jenis_kelamin'] == "Perempuan")
                                    echo "<option value='Perempuan' selected>Perempuan</option>";
                                else 
                                    echo "<option value='Perempuan'>Perempuan</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="nisn" class="form-control" required="true" placeholder="NISN" value="<?= $data['nisn']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nik" class="form-control" required="true" placeholder="No. Induk Kependudukan" value="<?= $data['nik']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tempat_lahir" class="form-control" required="true" placeholder="Tempat Lahir" value="<?= $data['tempat_lahir']?>">
                        </div>
                        <div class="form-group">
                            <input type="date" name="tanggal_lahir" class="form-control" required="true" placeholder="Tanggal Lahir" value="<?= $data['tanggal_lahir']?>">
                        </div>
                        <div class="form-group">
                            <select name="agama" class="form-control">
                                <?php
                                    if ($data['agama'] == "Islam")
                                        echo "<option value='Islam' selected>Islam</option>";
                                    else 
                                        echo "<option value='Islam'>Islam</option>";
                                    if ($data['agama'] == "Kristen")
                                        echo "<option value='Kristen' selected>Kristen</option>";
                                    else 
                                        echo "<option value='Kristen'>Kristen</option>";
                                    if ($data['agama'] == "Budha")
                                        echo "<option value='Budha' selected>Budha</option>";
                                    else 
                                        echo "<option value='Budha'>Budha</option>";
                                    if ($data['agama'] == "Hindu")
                                        echo "<option value='Hindu' selected>Hindu</option>";
                                    else 
                                        echo "<option value='Hindu'>Hindu</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat" class="form-control" required="true" placeholder="Alamat Tempat Tinggal" value="<?= $data['alamat']?>">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="rt" class="form-control" required="true" placeholder="RT" value="<?= $data['rt']?>">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="rw" class="form-control" required="true" placeholder="RW" value="<?= $data['rw']?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="kelurahan" class="form-control" required="true" placeholder="Kelurahan / Desa" value="<?= $data['kelurahan']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kecamatan" class="form-control" required="true" placeholder="Kecamatan" value="<?= $data['kecamatan']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kabupaten" class="form-control" required="true" placeholder="Kabupaten" value="<?= $data['kabupaten']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="provinsi" class="form-control" required="true" placeholder="Provinsi" value="<?= $data['provinsi']?>">
                        </div>
                        <div class="form-group">
                            <select name="transportasi" class="form-control">
                                <?php
                                    if ($data['transportasi'] == "Jalan Kaki")
                                        echo "<option value='Jalan Kaki' selected>Jalan Kaki</option>";
                                    else 
                                        echo "<option value='Jalan Kaki'>Jalan Kaki</option>";
                                    if ($data['transportasi'] == "Sepeda Motor")
                                        echo "<option value='Sepeda Motor' selected>Sepeda Motor</option>";
                                    else 
                                        echo "<option value='Sepeda Motor'>Sepeda Motor</option>";
                                    if ($data['transportasi'] == "Angkutan Umum")
                                        echo "<option value='Angkutan Umum' selected>Angkutan Umum</option>";
                                    else 
                                        echo "<option value='Angkutan Umum'>Angkutan Umum</option>";
                                    if ($data['transportasi'] == "Lainnya")
                                        echo "<option value='Lainnya' selected>Lainnya</option>";
                                    else 
                                        echo "<option value='Lainnya'>Lainnya</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="tinggal" class="form-control">
                                <?php
                                    if ($data['tinggal'] == "Bersama Orang Tua")
                                        echo "<option value='Bersama Orang Tua' selected>Bersama Orang Tua</option>";
                                    else 
                                        echo "<option value='Bersama Orang Tua'>Bersama Orang Tua</option>";
                                    if ($data['tinggal'] == "Bersama Wali")
                                        echo "<option value='Bersama Wali' selected>Bersama Wali</option>";
                                    else 
                                        echo "<option value='Bersama Wali'>Bersama Wali</option>";
                                    if ($data['tinggal'] == "Panti Asuhan")
                                        echo "<option value='Panti Asuhan' selected>Panti Asuhan</option>";
                                    else 
                                        echo "<option value='Panti Asuhan'>Panti Asuhan</option>";
                                    if ($data['tinggal'] == "Lainnya")
                                        echo "<option value='Lainnya' selected>Lainnya</option>";
                                    else 
                                        echo "<option value='Lainnya'>Lainnya</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="no_telp" class="form-control" required="true" placeholder="No. Telp / WhatsApp" value="<?= $data['no_telp']?>">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="true" placeholder="Email" value="<?= $data['email']?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" name="nama_ayah" class="form-control" required="true" placeholder="Nama Ayah" value="<?= $data['nama_ayah']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="thn_lahir_ayah" class="form-control" required="true" placeholder="Tahun Lahir Ayah" value="<?= $data['thn_lahir_ayah']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="pekerjaan_ayah" class="form-control" required="true" placeholder="Pekerjaan Ayah" value="<?= $data['pekerjaan_ayah']?>">
                        </div>
                        <div class="form-group">
                            <select for="pendidikan_ayah" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control">
                                <?php
                                    if ($data['pendidikan_ayah'] == "Tidak Sekolah")
                                        echo "<option value='Tidak Sekolah' selected>Tidak Sekolah</option>";
                                    else 
                                        echo "<option value='Tidak Sekolah'>Tidak Sekolah</option>";
                                    if ($data['pendidikan_ayah'] == "SD / MI")
                                        echo "<option value='SD / MI' selected>SD / MI</option>";
                                    else 
                                        echo "<option value='SD / MI'>SD / MI</option>";
                                    if ($data['pendidikan_ayah'] == "SMP / MTS")
                                        echo "<option value='SMP / MTS' selected>SMP / MTS</option>";
                                    else 
                                        echo "<option value='SMP / MTS'>SMP / MTS</option>";
                                    if ($data['pendidikan_ayah'] == "SMA / SMK / MA")
                                        echo "<option value='SMA / SMK / MA' selected>SMA / SMK / MA</option>";
                                    else 
                                        echo "<option value='SMA / SMK / MA'>SMA / SMK / MA</option>";
                                    if ($data['pendidikan_ayah'] == "Sarjana / S1")
                                        echo "<option value='Sarjana / S1' selected>Sarjana / S1</option>";
                                    else 
                                        echo "<option value='Sarjana / S1'>Sarjana / S1</option>";
                                    if ($data['pendidikan_ayah'] == "Megister / S2")
                                        echo "<option value='Megister / S2' selected>Megister / S2</option>";
                                    else 
                                        echo "<option value='Megister / S2'>Megister / S2</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select for="penghasilan_ayah" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control">
                                <?php
                                    if ($data['penghasilan_ayah'] == "Tidak Berpenghasilan")
                                        echo "<option value='Tidak Berpenghasilan' selected>Tidak Berpenghasilan</option>";
                                    else 
                                        echo "<option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>";   
                                    if ($data['penghasilan_ayah'] == "Rp. 500.000 - 1.000.000")
                                        echo "<option value='Rp. 500.000 - 1.000.000' selected>Rp. 500.000 - 1.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 500.000 - 1.000.000'>Rp. 500.000 - 1.000.000</option>";   
                                    if ($data['penghasilan_ayah'] == "Rp. 1.000.000 - 2.000.000")
                                        echo "<option value='Rp. 1.000.000 - 2.000.000' selected>Rp. 1.000.000 - 2.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 1.000.000 - 2.000.000'>Rp. 1.000.000 - 2.000.000</option>";   
                                    if ($data['penghasilan_ayah'] == "Rp. 2.000.000 - 3.000.000")
                                        echo "<option value='Rp. 2.000.000 - 3.000.000' selected>Rp. 2.000.000 - 3.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 2.000.000 - 3.000.000'>Rp. 2.000.000 - 3.000.000</option>";   
                                    if ($data['penghasilan_ayah'] == "Rp. 3.000.000 - 5.000.000")
                                        echo "<option value='Rp. 3.000.000 - 5.000.000' selected>Rp. 3.000.000 - 5.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 3.000.000 - 5.000.000'>Rp. 3.000.000 - 5.000.000</option>";   
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama_ibu" class="form-control" required="true" placeholder="Nama Ibu" value="<?= $data['nama_ibu']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="thn_lahir_ibu" class="form-control" required="true" placeholder="Tahun Lahir Ibu" value="<?= $data['thn_lahir_ibu']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="pekerjaan_ibu" class="form-control" required="true" placeholder="Pekerjaan Ibu" value="<?= $data['pekerjaan_ibu']?>">
                        </div>
                        <div class="form-group">
                            <select name="pendidikan_ibu"class="form-control">
                                <?php
                                    if ($data['pendidikan_ibu'] == "Tidak Sekolah")
                                        echo "<option value='Tidak Sekolah' selected>Tidak Sekolah</option>";
                                    else 
                                        echo "<option value='Tidak Sekolah'>Tidak Sekolah</option>";
                                    if ($data['pendidikan_ibu'] == "SD / MI")
                                        echo "<option value='SD / MI' selected>SD / MI</option>";
                                    else 
                                        echo "<option value='SD / MI'>SD / MI</option>";
                                    if ($data['pendidikan_ibu'] == "SMP / MTS")
                                        echo "<option value='SMP / MTS' selected>SMP / MTS</option>";
                                    else 
                                        echo "<option value='SMP / MTS'>SMP / MTS</option>";
                                    if ($data['pendidikan_ibu'] == "SMA / SMK / MA")
                                        echo "<option value='SMA / SMK / MA' selected>SMA / SMK / MA</option>";
                                    else 
                                        echo "<option value='SMA / SMK / MA'>SMA / SMK / MA</option>";
                                    if ($data['pendidikan_ibu'] == "Sarjana / S1")
                                        echo "<option value='Sarjana / S1' selected>Sarjana / S1</option>";
                                    else 
                                        echo "<option value='Sarjana / S1'>Sarjana / S1</option>";
                                    if ($data['pendidikan_ibu'] == "Megister / S2")
                                        echo "<option value='Megister / S2' selected>Megister / S2</option>";
                                    else 
                                        echo "<option value='Megister / S2'>Megister / S2</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select for="penghasilan_ibu" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control">
                                <?php
                                    if ($data['penghasilan_ibu'] == "Tidak Berpenghasilan")
                                        echo "<option value='Tidak Berpenghasilan' selected>Tidak Berpenghasilan</option>";
                                    else 
                                        echo "<option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>";   
                                    if ($data['penghasilan_ibu'] == "Rp. 500.000 - 1.000.000")
                                        echo "<option value='Rp. 500.000 - 1.000.000' selected>Rp. 500.000 - 1.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 500.000 - 1.000.000'>Rp. 500.000 - 1.000.000</option>";   
                                    if ($data['penghasilan_ibu'] == "Rp. 1.000.000 - 2.000.000")
                                        echo "<option value='Rp. 1.000.000 - 2.000.000' selected>Rp. 1.000.000 - 2.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 1.000.000 - 2.000.000'>Rp. 1.000.000 - 2.000.000</option>";   
                                    if ($data['penghasilan_ibu'] == "Rp. 2.000.000 - 3.000.000")
                                        echo "<option value='Rp. 2.000.000 - 3.000.000' selected>Rp. 2.000.000 - 3.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 2.000.000 - 3.000.000'>Rp. 2.000.000 - 3.000.000</option>";   
                                    if ($data['penghasilan_ibu'] == "Rp. 3.000.000 - 5.000.000")
                                        echo "<option value='Rp. 3.000.000 - 5.000.000' selected>Rp. 3.000.000 - 5.000.000</option>";
                                    else 
                                        echo "<option value='Rp. 3.000.000 - 5.000.000'>Rp. 3.000.000 - 5.000.000</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="no_telp_ortu" class="form-control" required="true" placeholder="No. Telp Orang Tua" value="<?= $data['no_telp_ortu']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat_ortu" class="form-control" required="true" placeholder="Alamat Orang Tua" value="<?= $data['alamat_ortu']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sekolah_smp" class="form-control" required="true" placeholder="Asal Sekolah SMP / MTs" value="<?= $data['sekolah_smp']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat_sekolah_smp" class="form-control" required="true" placeholder="Alamat Asal Sekolah SMP / MTs" value="<?= $data['alamat_sekolah_smp']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sekolah_sd" class="form-control" required="true" placeholder="Asal Sekolah SD / MI" value="<?= $data['sekolah_sd']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat_sekolah_sd" class="form-control" required="true" placeholder="Alamat Asal Sekolah SD / MI" value="<?= $data['alamat_sekolah_sd']?>">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" name="tb" class="form-control" required="true" placeholder="Tinggi Badan" value="<?= $data['tb']?>">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="bb" class="form-control" required="true" placeholder="Berat Badan" value="<?= $data['bb']?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" name="jml_saudara" class="form-control" required="true" placeholder="Jumlah Saudara Kandung" value="<?= $data['jml_saudara']?>">
                        </div>
                        <div class="form-group">
                            <input type="number" name="anak_ke" class="form-control" required="true" placeholder="Anak Ke" value="<?= $data['anak_ke']?>">
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
<?php
}
?>

<form action="?hal=add ppdb" method="POST">
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
                            <select name="status_siswa" class="form-control">
                                <option value="">-- Status Siswa --</option>
                                <option value="Siswa Baru">Siswa Baru</option>
                                <option value="Pindahan">Siswa Pindahan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select for="jurusan" name="jurusan" id="jurusan" class="form-control">
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="AKL">Akuntansi dan Keuangan Lembaga</option>
                                <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama_lengkap" class="form-control" required="true" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <select for="jenis_kelamin" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="Laki - laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="nisn" class="form-control" required="true" placeholder="NISN">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nik" class="form-control" required="true" placeholder="No. Induk Kependudukan">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tempat_lahir" class="form-control" required="true" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <input type="date" name="tanggal_lahir" class="form-control" required="true" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <select for="agama" name="agama" id="agama" class="form-control">
                                <option value="">-- Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat" class="form-control" required="true" placeholder="Alamat Tempat Tinggal">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="rt" class="form-control" required="true" placeholder="RT">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="rw" class="form-control" required="true" placeholder="RW">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="kelurahan" class="form-control" required="true" placeholder="Kelurahan / Desa">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kecamatan" class="form-control" required="true" placeholder="Kecamatan">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kabupaten" class="form-control" required="true" placeholder="Kabupaten">
                        </div>
                        <div class="form-group">
                            <input type="text" name="provinsi" class="form-control" required="true" placeholder="Provinsi">
                        </div>
                        <div class="form-group">
                            <select for="transportasi" name="transportasi" id="transportasi" class="form-control">
                                <option value="">-- Alat Transportasi Ke Sekolah --</option>
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Sepeda Motor">Sepeda Motor</option>
                                <option value="Angkutan Umum">Angkutan Umum</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select for="tinggal" name="tinggal" id="tinggal" class="form-control">
                                <option value="">-- Jenis Tempat Tinggal --</option>
                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                <option value="Bersama Wali">Bersama Wali</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="no_telp" class="form-control" required="true" placeholder="No. Telp / WhatsApp">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="true" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" name="nama_ayah" class="form-control" required="true" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                            <input type="text" name="thn_lahir_ayah" class="form-control" required="true" placeholder="Tahun Lahir Ayah">
                        </div>
                        <div class="form-group">
                            <input type="text" name="pekerjaan_ayah" class="form-control" required="true" placeholder="Pekerjaan Ayah">
                        </div>
                        <div class="form-group">
                            <select for="pendidikan_ayah" name="pendidikan_ayah" id="pendidikan_ayah" class="form-control">
                                <option value="">-- Pendidikan Ayah --</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD / MI">SD / MI</option>
                                <option value="SMP / MTS">SMP / MTS</option>
                                <option value="SMA / SMK / MA">SMA / SMK / MA</option>
                                <option value="Sarjana">Sarjana / S1</option>
                                <option value="Megister">Megister / S2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select for="penghasilan_ayah" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control">
                                <option value="">-- Penghasilan Bulanan Ayah --</option>
                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                <option value="Rp. 500.000 - 1.000.000">Rp. 500.000 - 1.000.000</option>
                                <option value="Rp. 1.000.000 - 2.000.000">Rp. 1.000.000 - 2.000.000</option>
                                <option value="Rp. 2.000.000 - 3.000.000">Rp. 2.000.000 - 3.000.000</option>
                                <option value="Rp. 3.000.000 - 5.000.000">Rp. 3.000.000 - 5.000.000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama_ibu" class="form-control" required="true" placeholder="Nama Ibu">
                        </div>
                        <div class="form-group">
                            <input type="text" name="thn_lahir_ibu" class="form-control" required="true" placeholder="Tahun Lahir Ibu">
                        </div>
                        <div class="form-group">
                            <input type="text" name="pekerjaan_ibu" class="form-control" required="true" placeholder="Pekerjaan Ibu">
                        </div>
                        <div class="form-group">
                            <select for="pendidikan_ibu" name="pendidikan_ibu" id="pendidikan_ibu" class="form-control">
                                <option value="">-- Pendidikan Ibu --</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="SD / MI">SD / MI</option>
                                <option value="SMP / MTS">SMP / MTS</option>
                                <option value="SMA / SMK / MA">SMA / SMK / MA</option>
                                <option value="Sarjana">Sarjana / S1</option>
                                <option value="Megister">Megister / S2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select for="penghasilan_ibu" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control">
                                <option value="">-- Penghasilan Bulanan Ibu --</option>
                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                <option value="Rp. 500.000 - 1.000.000">Rp. 500.000 - 1.000.000</option>
                                <option value="Rp. 1.000.000 - 2.000.000">Rp. 1.000.000 - 2.000.000</option>
                                <option value="Rp. 2.000.000 - 3.000.000">Rp. 2.000.000 - 3.000.000</option>
                                <option value="Rp. 3.000.000 - 5.000.000">Rp. 3.000.000 - 5.000.000</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="no_telp_ortu" class="form-control" required="true" placeholder="No. Telp Orang Tua">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat_ortu" class="form-control" required="true" placeholder="Alamat Orang Tua">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sekolah_smp" class="form-control" required="true" placeholder="Asal Sekolah SMP / MTs">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat_sekolah_smp" class="form-control" required="true" placeholder="Alamat Asal Sekolah SMP / MTs">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sekolah_sd" class="form-control" required="true" placeholder="Asal Sekolah SD / MI">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat_sekolah_sd" class="form-control" required="true" placeholder="Alamat Asal Sekolah SD / MI">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" name="tb" class="form-control" required="true" placeholder="Tinggi Badan">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="bb" class="form-control" required="true" placeholder="Berat Badan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" name="jml_saudara" class="form-control" required="true" placeholder="Jumlah Saudara Kandung">
                        </div>
                        <div class="form-group">
                            <input type="number" name="anak_ke" class="form-control" required="true" placeholder="Anak Ke">
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