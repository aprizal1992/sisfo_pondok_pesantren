<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Fonts -->

    <style>
        .root-container {
            width: 100%;
            height: 100%;
        }

        table {
            font-size: .8em;
            font-family: Arial, Helvetica, sans-serif;
        }

        th,
        td {
            padding-left: 5px;
            padding-right: 5px;
        }

        @media print {
            @page {
                size: landscape;
                margin: 0;
            }

            body {
                padding: 1cm;
            }


        }
    </style>
</head>

<body>

    <div class="root-container">
        <div style="display: flex; justify-content: space-between; align-items: center">
            <div style="">
                <!-- <img src="<?= base_url("assets/img/logo.png") ?>" style="width: 150px"> -->
            </div>
            <div style="" style="display: flex; justify-content: center;align-items: center">
                <center>
                    <h2 style="margin: 0;padding: 0; text-align: center"><?= strtoupper("Madrasah Aliyah Pondok Pesantren Nurul Islam") ?>
                        <br> KAMPUNG BARU GUNUNG TOAR
                        <br> KABUPATEN KUANTAN SINGINGI
                    </h2>
                    <h2 style="margin: 0;padding: 0; text-align: center"></h2>
                </center>
                <br>
            </div>
            <div style=""></div>
        </div>
        <hr>
        <br />
        Laporan Data Pendaftaran
        <br />
        <table class="table" border="1" style="width: 100%;border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="width: 10px;">No</th>
                    <th>Tahun</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Provinsi</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Agama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num = 1;
                foreach ($daftar as $value) : ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td><?= $value['tahun'] ?></td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['jk'] ?></td>
                        <td><?= $value['tgl_lahir'] ?></td>
                        <td><?= $value['alamat'] ?></td>
                        <td><?= $value['no_hp'] ?></td>
                        <td><?= $value['provinsi'] ?></td>
                        <td><?= $value['kabupaten'] ?></td>
                        <td><?= $value['kecamatan'] ?></td>
                        <td><?= $value['agama'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div style="width: 100%; margin-top: 100px;">
        <table style="width: 100%;">
            <tr>
                <td style="width: 60%;"></td>
                <td style="width: 40%;">
                    <div style="width: 100%; display: flex; justify-content: flex-end;">
                        <div style="margin-right: 30px;">
                            <div>Kampung Baru Gunung Toar, <?= tgl_i(date("Y-m-d")) ?></div>
                            <strong>Kepala Sekolah,</strong>
                            <br />
                            <br />
                            <br />
                            <br />
                            <div>
                                <u>..........................</u>
                                <br>
                                </small>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>


    <script>
        window.print()
    </script>

</body>

</html>