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
                        <a href="<?= base_url("Laporan/pendaftaran") ?>" class="btn btn-secondary btn-sm">
                            <i class="fa fa-print"></i> Laporan
                        </a>
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                <td>
                                    <a class="btn btn-info btn-sm" href="<?= base_url("assets/Syarat/" . $value['dokument']) ?>" target="_blank">
                                        <i class="fa fa-download"></i> Download Syarat
                                    </a>
                                </td>
                                <td>
                                    <div style="display: flex;">
                                        <button class="btn btn-primary btn-sm mr-2 addSiswa" data-id="<?= $value['id'] ?>" data-toggle="modal" data-target=".bd-example-modal-lg">
                                            Tambahkan Ke data Siswa
                                        </button>
                                        <button class="btn btn-danger btn-sm mr-2 reject" data-id="<?= $value['id'] ?>">
                                            Hapus
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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="cards p-3">
                <div class="betwen">
                    Input
                </div>
                <hr>
                <div>
                    <form action="<?= base_url("Pendaftaran/p_siswa") ?>" method="post">
                        <input type="hidden" class="form-control" name="id" id="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">NIS</label>
                                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Nis Siswa" require>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Siswa</label>
                                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" placeholder="Nama Siswa">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control">
                                        <option value="">Pilih Provinsi</option>
                                        <?php foreach ($provinsi as $value) : ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kabupaten</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan" class="form-control">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" id="agama" class="form-control">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tahun Masuk</label>
                                    <input type="text" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="Tahun Masuk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kelas" id="kelas" class="form-control" require>
                                        <option value="">Pilih Kelas</option>
                                        <?php foreach ($kelas as $value) : ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['kelas'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>