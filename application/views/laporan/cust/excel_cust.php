<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=' . $title . '.xls');
header('Pragma: no-cache');
header('Expires: 0');
?>
<h3>
    <center>Laporan Data Customer Rental 88</center>
</h3>

<table class="table-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Customer</th>
            <th>Email Customer</th>
            <th>Jadi Customer Sejak</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($cust as $customer) { ?>
            <tr>
                <td scope="row"><?= $no++; ?></td>
                <td><?= $customer->nama_lengkap_cust; ?></td>
                <td><?= $customer->jenis_kelamin_cust; ?></td>
                <td><?= $customer->alamat_cust; ?></td>
                <td><?= $customer->email_cust; ?></td>
                <td><?= date(
                        'd F Y',
                        $customer->tanggal_input_cust
                    ); ?></td>
                <td>
                    <picture>
                        <source srcset="" type="image/svg+xml">
                        <img src="<?= base_url('assets/img/profile/') . $customer->image_cust; ?>" class="img-fluid img-thumbnail" alt="...">
                    </picture>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>