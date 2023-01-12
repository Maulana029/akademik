<?php
    if(!defined('INDEX')) die("");
?>
<title>Data PPDB</title>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data PPDB</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?hal=data ppdb">Home</a></li>
                        <li class="breadcrumb-item">Data PPDB</li>
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
                            <h3 class="card-title">Peneriamaan Peserta Didik Baru</h3>
                        </div>
                        <div class="card-body">
                        <div class="mb-2">
                            <button onclick="window.open('export data ppdb excel.php')" class="btn btn-success btn-sm" id="excel"><i class="fas fa-file-excel"></i> Export Excel</button>
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
                                        <th>Jurusan</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>NISN</th>
                                        <th>No. Induk Kependudukan</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Agama</th>
                                        <th>Alamat Tempat Tinggal</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Kelurahan / Desa</th>
                                        <th>Kecamatan</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Jenis Transportasi Ke Sekolah</th>
                                        <th>Jenis Tinggal</th>
                                        <th>No. Telp / WhatsApp</th>
                                        <th>Email</th>
                                        <th>Nama Ayah</th>
                                        <th>Tahun Lahir Ayah</th>
                                        <th>Pekerjaan Ayah</th>
                                        <th>Pendidikan Ayah</th>
                                        <th>Penghasilan Bulanan Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Tahun Lahir Ibu</th>
                                        <th>Pekerjaan Ibu</th>
                                        <th>Pendidikan Ibu</th>
                                        <th>Penghasilan Bulanan Ibu</th>
                                        <th>No. Telp Orang Tua</th>
                                        <th>Alamat Orang Tua</th>
                                        <th>Asal Sekolah SMP / MTs</th>
                                        <th>Alamat Asal Sekolah SMP / MTs</th>
                                        <th>Asal Sekolah SD / MI</th>
                                        <th>Alamat Asal Sekolah SD / MI</th>
                                        <th>Tinggi Badan</th>
                                        <th>Berat Badan</th>
                                        <th>Jumlah Saudara Kandung</th>
                                        <th>Anak Ke</th>
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
                                        <td><?= $data['jurusan'];?></td>
                                        <td><?= $data['nama_lengkap'];?></td>
                                        <td><?= $data['jenis_kelamin'];?></td>
                                        <td><?= $data['nisn'];?></td>
                                        <td><?= $data['nik'];?></td>
                                        <td><?= $data['tempat_lahir'];?></td>
                                        <td><?= $data['tanggal_lahir'];?></td>
                                        <td><?= $data['agama'];?></td>
                                        <td><?= $data['alamat'];?></td>
                                        <td><?= $data['rt'];?></td>
                                        <td><?= $data['rw'];?></td>
                                        <td><?= $data['kelurahan'];?></td>
                                        <td><?= $data['kecamatan'];?></td>
                                        <td><?= $data['kabupaten'];?></td>
                                        <td><?= $data['provinsi'];?></td>
                                        <td><?= $data['transportasi'];?></td>
                                        <td><?= $data['tinggal'];?></td>
                                        <td><?= $data['no_telp'];?></td>
                                        <td><?= $data['email'];?></td>
                                        <td><?= $data['nama_ayah'];?></td>
                                        <td><?= $data['thn_lahir_ayah'];?></td>
                                        <td><?= $data['pekerjaan_ayah'];?></td>
                                        <td><?= $data['pendidikan_ayah'];?></td>
                                        <td><?= $data['penghasilan_ayah'];?></td>
                                        <td><?= $data['nama_ibu'];?></td>
                                        <td><?= $data['thn_lahir_ibu'];?></td>
                                        <td><?= $data['pekerjaan_ibu'];?></td>
                                        <td><?= $data['pendidikan_ibu'];?></td>
                                        <td><?= $data['penghasilan_ibu'];?></td>
                                        <td><?= $data['no_telp_ortu'];?></td>
                                        <td><?= $data['alamat_ortu'];?></td>
                                        <td><?= $data['sekolah_smp'];?></td>
                                        <td><?= $data['alamat_sekolah_smp'];?></td>
                                        <td><?= $data['sekolah_sd'];?></td>
                                        <td><?= $data['alamat_sekolah_sd'];?></td>
                                        <td><?= $data['tb'];?></td>
                                        <td><?= $data['bb'];?></td>
                                        <td><?= $data['jml_saudara'];?></td>
                                        <td><?= $data['anak_ke'];?></td>
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