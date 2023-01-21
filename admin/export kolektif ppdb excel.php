<?php
    include '../config/config.php';
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=laporan data kolektif.xls"); 
?>

<p align="center" style="font-weight:bold;font-size:16pt">LAPORAN DATA KOLEKTIF PPDB</p>

<table border="1" align="center">
    <tr>
        <th width="50">#</th>
        <th width="200">Nama Lengkap</th>
        <th width="100">Keterangan</th>
        <th width="100">Jml Formulir Keluar</th>
        <th width="100">Tgl Formulir Keluar</th>
        <th width="100">Jml Formulit Masuk</th>
        <th width="100">Tgl Formulir Keluar</th>
        <th width="100">No. WhatsApp</th>
</tr>
<tr>
    <?php
        $query = mysqli_query($conn, "SELECT * FROM data_kolektif_ppdb ORDER BY id DESC");
        $no=0;
        while($data = mysqli_fetch_array($query)){
            $no++;
    ?>
    <td align="center"><?= $no;?></td>
    <td align="center"><?= $data['nama_lengkap']?></td>
    <td align="center"><?= $data['keterangan']?></td>
    <td align="center"><?= $data['jml_formulir_keluar']?></td>
    <td align="center"><?= $data['tgl_formulir_keluar']?></td>
    <td align="center"><?= $data['jml_formulir_masuk']?></td>
    <td align="center"><?= $data['tgl_formulir_masuk']?></td>
    <td align="center"><?= $data['no_telp_kolektif']?></td>
</tr>
<?php
}
?>
</table>