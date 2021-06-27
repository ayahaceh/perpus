<?php

?>

<html>

<head>
    <!-- <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>prem/dist/img/favicon.png"> -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets_style/assets/dist/img/logo.png">
    <style type="text/css" media="print">
        table {
            /* border: solid 1px #000; */
            border: solid 1px;
            border-collapse: collapse;
            width: 100%
        }

        tr {
            /* border: solid 1px #000 */
            border: solid 1px
        }

        td {
            padding: 7px 5px
        }

        h3 {
            margin-bottom: -17px
        }

        h2 {
            margin-bottom: 1px
        }
    </style>
    <style type="text/css" media="screen">
        table {
            /* border: solid 1px #000; */
            border: solid 1px;
            border-collapse: collapse;
            width: 60%
        }

        tr {
            border: solid 1px #000
        }

        td {
            padding: 7px 5px
        }

        h3 {
            margin-bottom: -17px
        }

        h2 {
            margin-bottom: 1px
        }
    </style>
    <style>
        .p2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .p1 {
            font-family: Times, serif;
            font-size: 12px;
        }

        .p3 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .p4 {
            font-family: "Times New Roman", Times, serif;
            font-size: 14px;
        }

        table tr.hide-border {
            /* border: 0; */
            border: 1;
        }
    </style>
</head>

<body onload="window.print()">


    <!-- <body> -->
    <table border="0">
        <tr>
            <th width="15%">
                <div class="login-logo">
                    <img style="max-height:80px;width:auto;" src="<?= base_url(); ?>assets_style/assets/dist/img/logo.png">
                </div>
                <!--/. Logo-->
            </th>
            <th width="70%" align="center">
                <h2><?= $perpus->nama_perpus; ?></h2>
                <Font size="3"><?= $perpus->alamat_perpus; ?></font>
                <br>
                <Font size="2"><?= "Telp. " . $perpus->telp_perpus . " - Email :" . $perpus->email_perpus; ?></font>
            </th>
        </tr>
    </table>

    <table>
        <tr>
            <th>
                <h2><?= $nama_lap; ?></h2>
            </th>
        </tr>
    </table>

    <table width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>No Anggota</th>
                <th>Nama Anggota</th>
                <th>Tgl Pinjam</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>No Hp</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($buku->result_array() as $isi) { ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $isi['anggota_id']; ?></td>
                    <td><?= $isi['nama']; ?></td>
                    <td><?= date("d/m/yy", strtotime($isi['tgl_pinjam'])); ?></td>
                    <td><?= $isi['buku_id']; ?></td>
                    <td><?= $isi['title']; ?></td>
                    <td><?= $isi['telepon']; ?></td>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
    </table>
    <table>
        <tr>
            <th style="width: 60%;">
            </th>
            <th><br />
                Purwakarta, <?= date("d M Y"); ?><br />
                Ditanda tangani oleh :<br /><br /><br />
                <strong><u>Nama Petugas</u></strong><br />
            </th>
        </tr>
    </table>

</body>

</html>