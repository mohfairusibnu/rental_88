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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>