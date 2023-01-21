<?php
    $host       = "localhost";
    $username   = "root";
    $password   = "";
    $db         = "akademik";

    $conn       = mysqli_connect($host, $username, $password, $db);
    if(!$conn){
        die("<script>alert('Gagal tersambung dengan database.')</script>");
    }
?>