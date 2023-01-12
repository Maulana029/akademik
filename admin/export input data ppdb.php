<?php
    include "../config/config.php";
?>
<html>
    <head>
        <title>Laporan Data PPDB</title>
        <lik rel="shortcut icon" href="../dist/img/logo-smk.png">
    </head>
    <body style="font-family: arial narrow;">
        <h3 align="center" style="font-weight:bold;font-size:16pt"><center>Laporan Data PPDB</center></h3>
            <table border="1" cellspacing="0" align="center">
                <tr>
                    <th width="50">#</th>
                    <th width="100">Status</th>
                    <th width="200">Nama Lengkap</th>
                    <th width="100">Asal Sekolah</th>
                    <th width="100">Jurusan</th>
                    <th width="100">No. Telp</th>
                </tr>
                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM data_ppdb ORDER BY id DESC");
                        $no=0;
                        while($data = mysqli_fetch_array($query)){
                            $no++;
                    ?>
                <tr>
                    <td align="center"><?= $no;?></td>
                    <td align="center"><?= $data['status'];?></td>
                    <td align="center"><?= $data['nama_lengkap'];?></td>
                    <td align="center"><?= $data['sekolah_smp'];?></td>
                    <td align="center"><?= $data['jurusan'];?></td>
                    <td align="center"><?= $data['no_telp'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
    <script>
        window.print();
    </script>
</body>
</html>