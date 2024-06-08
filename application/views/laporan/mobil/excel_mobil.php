<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=' . $title . '.xls');
header('Pragma: no-cache');
header('Expires: 0');
?>
<h3>
    <center>Laporan Data Mobil Rental 88</center>
</h3>

<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Merk Mobil</th>
            <th>Nama Mobil</th>
            <th>Tahun Rilis</th>
            <th>No Plat</th>
            <th>Tipe Mobil</th>
            <th>Warna</th>
            <th>Transmisi</th>
            <th>Bahan Bakar</th>
            <th>Kapasitas</th>
            <th>Harga Sewa</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($mobil as $mb) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mb->merk_mobil ?></td>
                <td><?= $mb->nama_mobil ?></td>
                <td><?= $mb->tahun_rilis ?></td>
                <td><?= $mb->no_polisi ?></td>
                <td><?= $mb->nama_tipe ?></td>
                <td><?= $mb->warna ?></td>
                <td><?= $mb->jenis_transmisi ?></td>
                <td><?= $mb->bahan_bakar ?></td>
                <td><?= $mb->jumlah_kapasitas ?></td>
                <td><?= $mb->harga_sewa ?></td>
                <td><?= $mb->stok ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>