<div class="row">
    <div class="col-md-12">
        <div class="cards" style="padding: 20px; background-color: #fff;">
            <div class="betwen w-100 mb-3">
                <div>
                    <h5>Kelas</h5>
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
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $num = 1;
                        foreach ($kelas as $value) : ?>
                            <tr>
                                <td><?= $num++ ?></td>
                                <td><?= $value['kelas'] ?? "" ?></td>
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
                    <form action="<?= base_url("Siswa/p_kelas") ?>" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nama Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="nama_kelas" placeholder="Nama Kelas">
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