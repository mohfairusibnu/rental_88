<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=' . $title . '.xls');
header('Pragma: no-cache');
header('Expires: 0');
?>
<h3>
    <center>Laporan Data Penyewaan Rental 88</center>
</h3>

<table class="table-data">
    <tr>
        <th>Kode Sewa</th>
        <th>Nama Customer</th>
        <th>Merk /Nama Mobil</th>
        <th>Harga Sewa</th>
        <th>Tanggal Sewa</th>
        <th>Tanggal Kembali</th>
        <th>Tanggal Pengembalian</th>
        <th>Metode Pembayaran</th>
        <th>Denda/Hari/Kerusakan</th>
        <th>Status</th>
        <th>Total Bayar</th>
    </tr>
    <?php
    foreach ($sewa as $s) {
    ?>
        <tr>
            <td><?= $s->kode_sewa ?></td>
            <td><?= $s->nama_lengkap_cust ?></td>
            <td><?= $s->merk_mobil ?> <?= $s->nama_mobil ?></td>
            <td><?= $s->harga_sewa ?></td>
            <td><?= $s->tgl_sewa ?></td>
            <td><?= $s->tgl_kembali ?></td>
            <td><?= $s->tgl_pengembalian ?></td>
            <td><?= $s->nama_mp ?></td>
            <td><?= $s->denda ?></td>
            <?php if ($s->status == "Disewa")
                $status = "info";
            else
                $status = "secondary";
            ?>
            <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $s->status; ?></i></td>
            <td><?= $s->total_bayar ?></td>
        </tr>
    <?php
    } ?>
</table>