<?php
    session_start();
    session_destroy();

    echo "<p align='center' style='font-size: 145px; padding-top: 205px;'>Anda Telah Logout</p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
?>