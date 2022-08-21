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
        Laporan Data Guru 
        <br />
        <table class="table" border="1" style="width: 100%;border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="width: 10px;">No</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>gelar</th>
                    <th>Alamat Rumah</th>
                    <th>Telepon</th>
                    <th>Status Guru</th>
                    <th>Status PNS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $num = 1;
                foreach ($guru as $value) : ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td><?= $value->nik ?></td>
                        <td><?= $value->nama_lengkap ?></td>
                        <td><?= $value->tmp_lahir ?></td>
                        <td><?= $value->tgl_lahir ?></td>
                        <td><?= $value->jenis_kelamin ?></td>
                        <td><?= $value->agama ?></td>
                        <td><?= $value->pendidikan ?></td>
                        <td><?= $value->gelar_akademi ?></td>
                        <td><?= $value->alamat_rumah ?></td>
                        <td><?= $value->telepon ?></td>
                        <td><?= $value->status_guru ?></td>
                        <td><?= $value->status_pns ?></td>
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