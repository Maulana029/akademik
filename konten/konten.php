<?php
    if(!defined('INDEX')) die ("");

    $halaman = array("dashboard","input data ppdb","data ppdb","data kolektif ppdb","add ppdb","hapus ppdb",
    "add kolektif ppdb","edit data ppdb"); ///tambah sub menu sumber dari index.php

    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "dashboard";
    foreach($halaman as $h){
        if($hal == $h){
            include "../konten/$h.php";
            break;
        }
    }
?>