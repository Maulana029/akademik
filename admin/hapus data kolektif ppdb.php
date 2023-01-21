<?php
    include "../config/config.php";

    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM data_kolektif_ppdb WHERE id='$id'");
    if($delete){
        echo "<p align='center' style='font-size: 90px; padding-top: 205px;'>Data Berhasil Dihapus</p>";
        header("refresh:2; index.php?hal=data kolektif ppdb");
    }else {
        echo "<p align='center' style='font-size: 90px; padding-top: 205px;'>Tidak Dapat Menghapus Data</p>";
        header("refresh:2; index.php?hal=data kolektif ppdb");
    }
?>