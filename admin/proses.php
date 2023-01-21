<?php
    session_start();
    ob_start();
    include '../config/config.php';

    $email      = $_POST['email_user'];
    $password   = md5($_POST['password_user']);
    $query      = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' AND password='$password'");
    $data       = mysqli_fetch_array($query);
    $jml        = mysqli_num_rows($query);

    if($jml > 0){
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] = $data['password'];
        header("Location: index.php");
    }else{
        echo "<script>alert('Email atau Password Anda Salah, Silahkan Coba Lagi...!!!')</script>";
        echo "<meta http-equiv='refresh' content='0.1; url=login.php'>";
    }
?>