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
                                $query = mysqli_query($conn, "SELECT * FROM data_ppdb ORDER BY id DESC");
                                $no = 0;
                                while ($data = mysqli_fetch_array($query)) {
                                    $no++; ?>
                                <tr>
                                    <td><?= $no;?></td>
                                    <td><?= $data['status'];?></td>
                                    <td><?= $data['nama_lengkap'];?></td>
                                    <td><?= $data['sekolah_smp'];?></td>
                                    <td><?= $data['jurusan'];?></td>
                                    <td><?= $data['no_telp']?></td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-xs"><i class="far fa-file"></i></a>
                                        <button onclick="window.open('print input data ppdb.php')" class="btn btn-success btn-xs"><i class="fas fa-print"></button></i>
                                        <button type="submit" data-target="#updateuser" data-toggle="modal" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></button>
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

<form action="?hal=update data ppdb" method="POST">
<div class="modal fade" id="updateuser">
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
                            <select for="jk" name="jk" id="jk" class="form-control">
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
                            <select for="jk" name="jk" id="jk" class="form-control">
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