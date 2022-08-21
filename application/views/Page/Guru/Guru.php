<div class="row">
    <div class="col-md-12">
        <div class="cards" style="padding: 20px; background-color: #fff;">
            <div class="betwen w-100 mb-3">
                <div>
                    <h5>Data Guru</h5>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Tambah</button>
                </div>
            </div>
            <div class="responsive">
                <div class="betwen w-100 mb-3">
                    <div></div>
                    <div>
                        <a href="<?= base_url("Laporan/guru") ?>" class="btn btn-secondary btn-sm">
                            <i class="fa fa-print"></i> Guru
                        </a>
                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                            <th>Aksi</th>
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
                                <td>
                                    <div class="d-flex">
                                        <button data-id="<?= $value->id_guru ?>" class="btn btn-warning btn-sm mr-2 edit" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-edit"></i></button>
                                        <button data-id="<?= $value->id_guru ?>" class="btn btn-danger btn-sm mr-2 delete"><i class="fa fa-trash"></i></button>
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
                    <form action="<?= base_url("Guru/p_guru") ?>" method="post">
                        <input type="hidden" class="form-control" name="id_guru" id="id_guru">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tempat Lahir">
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
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pendidikan Terakhir</label>
                                    <select name="pendidikan" id="pendidikan" class="form-control">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gelar Akademi</label>
                                    <select name="gelar_akademi" id="gelar_akademi" class="form-control">
                                        <option value="">Pilih Gelar Akademi</option>
                                        <option value="S.Kom">S.Kom</option>
                                        <option value="S.IPA">S.IPA</option>
                                        <option value="S.IPS">S.IPS</option>
                                        <option value="S.B">S.B</option>
                                        <option value="S.T">S.T</option>
                                        <option value="S.H">S.H</option>
                                        <option value="S.Sos">S.Sos</option>
                                        <option value="S.Pd">S.Pd</option>
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
                                    <label for="">Alamat Rumah</label>
                                    <textarea name="alamat_rumah" id="alamat_rumah" class="form-control" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status Guru</label>
                                    <select name="status_guru" id="status_guru" class="form-control">
                                        <option value="">Pilih Status Guru</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status PNS</label>
                                    <select name="status_pns" id="status_pns" class="form-control">
                                        <option value="">Pilih Status PNS</option>
                                        <option value="pns">PNS</option>
                                        <option value="honorer">HONORER</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <button class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>