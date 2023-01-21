<?php
    include "../config/config.php";
    $query = mysqli_query($conn, "UPDATE data_kolektif_ppdb SET 
    nama_lengkap ='$_POST[nama_lengkap]', 
    keterangan='$_POST[keterangan]', 
    jml_formulir_keluar='$_POST[jml_formulir_keluar]', 
    tgl_formulir_keluar='$_POST[tgl_formulir_keluar]',
    jml_formulir_masuk='$_POST[jml_formulir_masuk]',
    tgl_formulir_masuk='$_POST[tgl_formulir_masuk]',
    no_telp_kolektif='$_POST[no_telp_kolektif]'
    WHERE id='$_POST[id]'");

    if($query){
        echo "<p align='center' style='font-size: 90px; padding-top: 205px;'>Data Berhasil Diubah</p>";
        header("refresh:2; index.php?hal=data kolektif ppdb");
    }else{
        echo "<p align='center' style='font-size: 90px; padding-top: 205px;'>Tidak Dapat Mengubah Data</p>";
        header("refresh:2; index.php?hal=data kolektif ppdb");
    }
?>