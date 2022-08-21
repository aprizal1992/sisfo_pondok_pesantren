<div class="row">
    <input type="hidden" name="id" id="id" value="<?= $berita['id'] ?? "" ?>">
    <div class="col-md-12">
        <div class="cards py-3" style="z-index: 99; position: relative; background-color: #fff;">
            <div class="betwen" style="padding-left: 15px; padding-right: 15px;">
                <h6>Buat Berita</h6>
                <?php if ($action == "create") : ?>
                    <button class="btn btn-info btn-sm" id="save_news"><i class="fa fa-save"></i> Simpan</button>
                <?php else : ?>
                    <button class="btn btn-success btn-sm" id="update_news"><i class="fa fa-save"></i> Edit</button>
                <?php endif ?>
            </div>
            <hr>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div style="display: flex;">
                                <input type="text" class="form-control form-control-sm inpType" name="judul" id="judul" placeholder="judul berita" value="<?= $berita['judul'] ?? "" ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div style="display: flex; align-items: center;">
                                Thumbnails:
                                <input type="file" class="form-control form-control-sm inpType ml-2" name="thm" id="thm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea id="artikel" style="width: 100%;"><?= $berita['artikel'] ?? "" ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>