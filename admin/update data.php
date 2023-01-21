<?php
    include "../config/config.php";
    $query = mysqli_query($conn, "UPDATE data_ppdb SET 
    status_siswa = '$_POST[status_siswa]',
    jurusan ='$_POST[jurusan]',
    nama_lengkap ='$_POST[nama_lengkap]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    nisn = '$_POST[nisn]',
    nik = '$_POST[nik]',
    tempat_lahir = '$_POST[tempat_lahir]',
    tanggal_lahir = '$_POST[tanggal_lahir]',
    agama = '$_POST[agama]',
    alamat = '$_POST[alamat]',
    rt = '$_POST[rt]',
    rw = '$_POST[rw]',
    kelurahan = '$_POST[kelurahan]',
    kecamatan = '$_POST[kecamatan]',
    kabupaten = '$_POST[kabupaten]',
    provinsi = '$_POST[provinsi]',
    transportasi = '$_POST[transportasi]',
    tinggal = '$_POST[tinggal]',
    no_telp = '$_POST[no_telp]',
    email = '$_POST[email]',
    
    nama_ayah = '$_POST[nama_ayah]',
    thn_lahir_ayah = '$_POST[thn_lahir_ayah]',
    pekerjaan_ayah = '$_POST[pekerjaan_ayah]',
    pendidikan_ayah = '$_POST[pendidikan_ayah]',
    penghasilan_ayah = '$_POST[penghasilan_ayah]',
    nama_ibu = '$_POST[nama_ibu]',
    thn_lahir_ibu = '$_POST[thn_lahir_ibu]',
    pekerjaan_ibu = '$_POST[pekerjaan_ibu]',
    pendidikan_ibu = '$_POST[pendidikan_ibu]',
    penghasilan_ibu = '$_POST[penghasilan_ibu]',
    no_telp_ortu = '$_POST[no_telp_ortu]',
    alamat_ortu = '$_POST[alamat_ortu]',
    sekolah_smp = '$_POST[sekolah_smp]',
    alamat_sekolah_smp = '$_POST[alamat_sekolah_smp]',
    sekolah_sd = '$_POST[sekolah_sd]',
    alamat_sekolah_sd = '$_POST[alamat_sekolah_sd]',
    tb = '$_POST[tb]',
    bb = '$_POST[bb]',
    jml_saudara = '$_POST[jml_saudara]',
    anak_ke = '$_POST[anak_ke]'
    WHERE id='$_POST[id]'");

    if($query){
        echo "<p align='center' style='font-size: 90px; padding-top: 205px;'>Data Berhasil Diubah</p>";
        header("refresh:2; index.php?hal=input data ppdb");
    }else{
        echo "<p align='center' style='font-size: 90px; padding-top: 205px;'>Tidak Dapat Mengubah Data</p>";
        header("refresh:2; index.php?hal=input data ppdb");
    }
?>