<?php
    include "../config/config.php";
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Peserta Didik Baru.xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta Didik Baru</title>
</head>
<body style="font-family: arial narrow;">
    <center>
    <h4 style="margin: 0; font-size: 20px;">Data Peserta Didik Baru<br></h4>
    <h4 style="margin: 0; font-size: 20px;">SMK Attaqwa 05 Kebalen</h4>
    <h4 style="margin: 0; font-size: 20px;">Tahun Pelajaran 2023 / 2024</h4>
    </center>
    <table border="1" cellspacing="0" align="center">
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
        <?php
            $query = mysqli_query($conn, "SELECT * FROM data_ppdb ORDER BY id DESC");
            $no=0;
            while($data = mysqli_fetch_array($query)){
                $no++;
        ?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $data['status_siswa'];?></td>
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
    </table>
</body>
</html>