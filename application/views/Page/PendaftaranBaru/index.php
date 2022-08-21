<div class="row">
    <div class="col-md-12">
        <div class="cards" style="padding: 20px; background-color: #fff;">
            <div class="betwen w-100 mb-3">
                <div>
                    <h5>Data Pendaftaran Siswa </h5>
                </div>
                <div>
                    <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Tambah</button> -->
                </div>
            </div>
            <div class="responsive">
                <div class="betwen w-100 mb-3">
                    <div></div>
                    <div>
                        <a href="<?= base_url("Laporan/pendaftaran_baru") ?>" class="btn btn-secondary btn-sm">
                            <i class="fa fa-print"></i> Laporan
                        </a>
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Provinsi</th>
                            <th>Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Agama</th>
                            <th>Syarat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $num = 1;
                        foreach ($daftar as $value) : ?>
                            <tr>
                                <td><?= $num++ ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['jk'] ?></td>
                                <td><?= $value['tgl_lahir'] ?></td>
                                <td><?= $value['alamat'] ?></td>
                                <td><?= $value['no_hp'] ?></td>
                                <td><?= $value['provinsi'] ?></td>
                                <td><?= $value['kabupaten'] ?></td>
                                <td><?= $value['kecamatan'] ?></td>
                                <td><?= $value['agama'] ?></td>
                                <td>
                                    <a class="btn btn-info btn-sm" href="<?= base_url("assets/Syarat/" . $value['dokument']) ?>" target="_blank">
                                        <i class="fa fa-download"></i> Download Syarat
                                    </a>
                                </td>
                                <td>
                                    <div style="display: flex;">
                                        <button class="btn btn-primary btn-sm mr-2 accept" data-id="<?= $value['id'] ?>">
                                            Terima
                                        </button>
                                        <button class="btn btn-danger btn-sm mr-2 reject" data-id="<?= $value['id'] ?>">
                                            Tolak
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>