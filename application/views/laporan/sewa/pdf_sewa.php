<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>