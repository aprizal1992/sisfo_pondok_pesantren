<div class="row">
    <div class="col-md-12">
        <div class="cards" style="padding: 20px; background-color: #fff;">
            <div class="betwen w-100 mb-3">
                <div>
                    <h5>Berita</h5>
                </div>
                <div>
                    <a href="<?= base_url("Berita/form_entry") ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Buat Berita Baru</a>
                </div>
            </div>
            <hr>
            <div class="">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 10px;">No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($berita as  $value) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->judul ?></td>
                                <td style="width: 150px;"><?= tgl_i($value->tanggal) ?></td>
                                <td style="width: 200px;">
                                    <a href="<?= base_url("Berita/form_entry/" . $value->id) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= base_url("Berita/delete/" . $value->id) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>