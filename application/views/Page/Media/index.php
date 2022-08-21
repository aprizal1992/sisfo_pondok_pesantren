<div class="row">
    <div class="col-md-12">
        <div class="cards" style="padding: 20px; background-color: #fff;">
            <div class="betwen w-100 mb-3">
                <div>
                    <h5>Media</h5>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Tambah</button>
                </div>
            </div>
            <div class="responsive">
                <div class="betwen w-100 mb-3">
                    <div></div>
                    <div>

                    </div>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($media as $value) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td id="judul_<?= $no ?>"><?= $value['judul']; ?></td>
                                <td id="keterangan_<?= $no ?>"><?= $value['keterangan']; ?></td>
                                <td id="tanggal_<?= $no ?>"><?= $value['tanggal']; ?></td>
                                <td id="jam_<?= $no ?>"><?= $value['jam']; ?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm img-show" onclick='imgShow(`<?= $value["foto"] ?>`)' data-toggle="modal" data-target=".bd-example-modal-img"><i class="fa fa-image"></i> Foto</button>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-id="<?= $value['id'] ?>" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="editMedia('<?= $no; ?>')"><i class="fa fa-edit"></i> Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteMedia('<?= $value['id']; ?>')"><i class="fa fa-trash"></i> Hapus</button>
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
                    Input Media
                </div>
                <hr>
                <div>
                    <input type="hidden" name="id" id="id" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Judul Media</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="judul media">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Gambar Media (bisa lebih dari 1 foto)</label>
                                <input type="file" class="form-control" name="foto" id="foto" multiple="multiple">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="keterangan" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group text-right">
                                <button class="btn btn-primary btn-sm" id="actions">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-img" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="cards p-3">
                <div class="row" id="imgShow">

                </div>
            </div>
        </div>
    </div>
</div>