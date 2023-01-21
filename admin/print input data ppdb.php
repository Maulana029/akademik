<?php
    include "../config/config.php";
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM data_ppdb WHERE id='$id'");
    $no = 0;
    while($data = mysqli_fetch_array($query)){
    $no++;
?>
<html>
    <head>
        <title><?= $data['nama_lengkap']?></title>
    </head>
    <style>
        img {
            text-align: center;
            margin-bottom: 5px;
        }
        .data{
            font-family: arial narrow;
            font-size: 16px;
            font-weight: bold;
            margin-left: 250px;
        }
        input{
            margin-left: 8px;
            font-family: arial narrow;
            font-size:16;
        }
        table {
            margin-top: 5px;
        }
        td{
            font-family: arial narrow;
            font-size: 16px;
        }
        input {
            border: 1px solid #ccc;
            padding: 1px;
        }
        .form-control {
            width: 112%;
        }
        .form-input {
            width: 12%;
        }
    </style>
    <body>
        <img src="../dist/img/KOP SURAT.PNG" alt=""><br>
        <label for="" class="data">BIODATA PESERTA DIDIK BARU</label><br>
        <table>
            <tbody>
                <tr>
                    <td>&emsp;&emsp;Status</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['status_siswa']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Jurusan</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['jurusan']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Nama Lengkap</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['nama_lengkap']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Jenis Kelamin</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['jenis_kelamin']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;NISN</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['nisn']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;No. Induk Kependudukan</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['nik']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Tempat Lahir</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['tempat_lahir']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Tanggal Lahir</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['tanggal_lahir']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Agama</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['agama']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Alamat Tempat Tinggal</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['alamat']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;RT / RW</td>
                    <td>:</td>
                    <td><input class="form-input" type="text" value="<?= $data['rt']?>">&emsp;/ <input class="form-input" type="text" value="<?= $data['rw']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Kelurahan / Desa</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['kelurahan']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Kecamatan</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['kecamatan']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Kabupaten</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['kabupaten']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Provinsi</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['provinsi']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Jenis Transportasi Ke Sekolah</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['transportasi']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Jenis Tinggal</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['tinggal']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;No. Telp / WhatsApp</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['no_telp']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Email</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['email']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Nama Ayah</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['nama_ayah']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Tahun Lahir Ayah</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['thn_lahir_ayah']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Pekerjaan Ayah</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['pekerjaan_ayah']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Pendidikan Ayah</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['pendidikan_ayah']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Penghasilan Bulanan Ayah</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['penghasilan_ayah']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Nama Ibu</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['nama_ibu']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Tahun Lahir Ibu</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['thn_lahir_ibu']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Pekerjaan Ibu</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['pekerjaan_ibu']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Pendidikan Ibu</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['pendidikan_ibu']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Penghasilan Bulanan Ibu</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['penghasilan_ibu']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;No. Telp Orang Tua</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['no_telp_ortu']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Alamat Orang Tua</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['alamat_ortu']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Asal Sekolah SMP / MTs</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['sekolah_smp']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Alamat Asal Sekolah SMP / MTs</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['alamat_sekolah_smp']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Asal Sekolah SD / MI</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['sekolah_sd']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Alamat Asal Sekolah SD / MI</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['alamat_sekolah_sd']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Tinggi Badan / Berat Badan</td>
                    <td>:</td>
                    <td><input class="form-input" type="text" value="<?= $data['tb']?>">&nbsp;cm &emsp;  / <input class="form-input" type="text" value="<?= $data['bb']?>">&nbsp;kg</td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Jumlah Saudara Kandung</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['jml_saudara']?>"></td>
                </tr>
                <tr>
                    <td>&emsp;&emsp;Anak Ke</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" value="<?= $data['anak_ke']?>"></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
        <script>
            window.print()
        </script>
    </body>
</html>