<?php
    include "../config/config.php";

    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM data_ppdb WHERE id='$id'");
    if($delete){
        echo "<h1>Data berhasil dihapus</h1>";
        header("refresh:2; index.php?hal=input data ppdb");
    }else {
        echo "<h1>Tidak dapat menghapus data</h1>";
        header("refresh:2; index.php?hal=input data ppdb");
    }
?>