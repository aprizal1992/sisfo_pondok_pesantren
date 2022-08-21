<style>
    input:read-only {
        background-color: transparent !important;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
        box-shadow: none;
        padding: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding-left: 5px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }

    .spanType {
        background-color: transparent !important;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0;
        box-shadow: none;
        padding: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding-left: 5px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="cards" style="padding: 20px; background-color: #fff;">
            <div class="betwen w-100 mb-3">
                <div>
                    <h5>Data Sekolah</h5>
                </div>
                <div>
                    <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Tambah</button> -->
                </div>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="data-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data" aria-selected="true">Data Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="data-tab" data-toggle="tab" href="#panel-broadcast" role="tab" aria-controls="panel-broadcast" aria-selected="true">Info Penting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tentang-sekolah-tab" data-toggle="tab" href="#tentang-sekolah" role="tab" aria-controls="tentang-sekolah" aria-selected="false">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="map-panel-tab" data-toggle="tab" href="#map-panel" role="tab" aria-controls="map-panel" aria-selected="false">Koordinat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="media-sekolah-tab" data-toggle="tab" href="#media-sekolah" role="tab" aria-controls="media-sekolah" aria-selected="false">Foto & Vidio</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="data-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Sekolah</label>
                                <div style="display: flex;">
                                    <input type="text" class="form-control form-control-sm inpType" data-value="kode_sekolah" data-keydb="kode_instansi" id="kode_sekolah" placeholder="Kode Sekolah" value="<?= $instansi['kode_instansi'] ?? "" ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Sekolah</label>
                                <div style="display: flex;">
                                    <input type="text" class="form-control form-control-sm inpType" data-value="nama_sekolah" data-keydb="nama_instansi" id="nama_sekolah" placeholder="Nama Sekolah" value="<?= $instansi['nama_instansi'] ?? "" ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Telepon Sekolah</label>
                                <div style="display: flex;">
                                    <input type="text" class="form-control form-control-sm inpType" data-value="no_telp" data-keydb="no_telp" id="no_telp" placeholder="Telepon Sekolah" value="<?= $instansi['no_telp'] ?? "" ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email Sekolah</label>
                                <div style="display: flex;">
                                    <input type="email" class="form-control form-control-sm inpType" data-value="email_instansi" data-keydb="email_instansi" id="email_instansi" placeholder="Email Sekolah" value="<?= $instansi['email_instansi'] ?? "" ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kepala Sekolah</label>
                                <div style="display: flex;" id="pimpinan">
                                    <div class="text-label" style="width: 100%; display: block;">
                                        <input style="cursor: pointer;" type="text" class="form-control form-control-sm inpLabel" data-input="#input-pimpinan" readonly value="<?= $instansi['nama_lengkap'] ?? "" ?>">
                                    </div>
                                    <div id="input-pimpinan" style="width: 100%; display: none;">
                                        <select name="user_pimpinan" id="user_pimpinan" class="form-control form-control-sm SelectType" style="width: 100%;" data-value="user_pimpinan" data-keydb="user_pimpinan">
                                            <?php foreach ($guru as $g) : ?>
                                                <option value="<?= $g['id_guru'] ?>" <?= $instansi['user_pimpinan'] == $g['id_guru'] ? "selected" : "" ?>><?= $g['nama_lengkap'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <div style="display: flex;" id="pimpinan">
                                    <div class="text-label" style="width: 100%; display: block;">
                                        <input style="cursor: pointer;" type="text" class="form-control form-control-sm inpLabel" data-input="#input-prov" readonly value="<?= $instansi['nama_provinsi'] ?? "" ?>">
                                    </div>
                                    <div id="input-prov" style="width: 100%; display: none;">
                                        <select name="provinsi" id="provinsi" class="form-control form-control-sm SelectType" style="width: 100%;" data-value="provinsi" data-keydb="provinsi">
                                            <?php foreach ($provinsi as $p) : ?>
                                                <option value="<?= $p['id'] ?>" <?= $instansi['provinsi'] == $p['id'] ? "selected" : "" ?>><?= $p['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kabupaten</label>
                                <div style="display: flex;" id="pimpinan">
                                    <div class="text-label" style="width: 100%; display: block;">
                                        <input style="cursor: pointer;" type="text" class="form-control form-control-sm inpLabel" data-input="#input-kab" readonly value="<?= $instansi['nama_kabupaten'] ?? "" ?>">
                                    </div>
                                    <div id="input-kab" style="width: 100%; display: none;">
                                        <?php
                                        $getkabupaten = $this->db->get_where('wilayah_kabupaten', ['provinsi_id' => $instansi['provinsi']])->result_array();
                                        ?>
                                        <select name="kabupaten" id="kabupaten" class="form-control form-control-sm SelectType" style="width: 100%;" data-value="kabupaten" data-keydb="kabupaten">
                                            <?php foreach ($getkabupaten as $p) : ?>
                                                <option value="<?= $p['id'] ?>" <?= $instansi['kabupaten'] == $p['id'] ? "selected" : "" ?>><?= $p['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <div style="display: flex;" id="pimpinan">
                                    <div class="text-label" style="width: 100%; display: block;">
                                        <input style="cursor: pointer;" type="text" class="form-control form-control-sm inpLabel" data-input="#input-kec" readonly value="<?= $instansi['nama_kecamatan'] ?? "" ?>">
                                    </div>
                                    <div id="input-kec" style="width: 100%; display: none;">
                                        <?php
                                        $getkabupaten = $this->db->get_where('wilayah_kecamatan', ['kabupaten_id' => $instansi['kabupaten']])->result_array();
                                        ?>
                                        <select name="kecamatan" id="kecamatan" class="form-control form-control-sm SelectType" style="width: 100%;" data-value="kecamatan" data-keydb="kecamatan">
                                            <?php foreach ($getkabupaten as $p) : ?>
                                                <option value="<?= $p['id'] ?>" <?= $instansi['kecamatan'] == $p['id'] ? "selected" : "" ?>><?= $p['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat Lengkap</label>
                                <div style="display: flex;" id="pimpinan">
                                    <div class="text-label" style="width: 100%;display: block;">
                                        <span style="cursor: pointer; width: 100%;" class="form-control form-control-sm inpLabel spanType" data-input="#input-alamat">
                                            <?= $instansi['alamat'] ?? "" ?>
                                        </span>
                                    </div>
                                    <div id="input-alamat" style="width: 100%; display: none;">
                                        <input type="text" class="form-control form-control-sm inpType" data-value="alamat" data-keydb="alamat" id="alamat" placeholder="Alamat" value="<?= $instansi['alamat'] ?? "" ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="panel-broadcast" role="tabpanel" aria-labelledby="broadcast-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="cards py-3">
                                <div class="betwen" style="padding-left: 15px; padding-right: 15px;">
                                    <h6>Info Penting</h6>
                                    <button class="btn btn-info btn-sm btn-editor-action-broadcast" style="display: none;" data-value="broadcast" data-keydb="broadcast"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                <hr>
                                <div style="display: flex;">
                                    <div class="text-label" style="width: 100%;display: block;">
                                        <div style="cursor: pointer; width: 100%; padding: 15px;" class="inpLabel" data-input="#input-broadcast">
                                            <?= $instansi['broadcast'] ?? "" ?>
                                        </div>
                                    </div>
                                    <div id="input-broadcast" style="width: 100%; display: none;">
                                        <textarea class="inpType" data-value="broadcast" data-keydb="broadcast" id="broadcast"><?= $instansi['broadcast'] ?? "" ?></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tentang-sekolah" role="tabpanel" aria-labelledby="tentang-sekolah-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="cards py-3">
                                <div class="betwen" style="padding-left: 15px; padding-right: 15px;">
                                    <h6>Sejarah Singkat</h6>
                                    <button class="btn btn-info btn-sm btn-editor-action-sejarah" style="display: none;" data-value="sejarah" data-keydb="sejarah"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                <hr>
                                <div style="display: flex;">
                                    <div class="text-label" style="width: 100%;display: block;">
                                        <div style="cursor: pointer; width: 100%; padding: 15px;" class="inpLabel" data-input="#input-sejarah">
                                            <?= $instansi['sejarah'] ?? "" ?>
                                        </div>
                                    </div>
                                    <div id="input-sejarah" style="width: 100%; display: none;">
                                        <textarea class="inpType" data-value="sejarah" data-keydb="sejarah" id="sejarah">
                                    <?= $instansi['sejarah'] ?? "" ?>
                                </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="cards py-3" style="z-index: 99; position: relative; background-color: #fff;">
                                <div class="betwen" style="padding-left: 15px; padding-right: 15px; ">
                                    <h6>Tentang Sekolah</h6>
                                    <button class="btn btn-info btn-sm btn-editor-action-about" style="display: none;" data-value="about" data-keydb="about"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                <hr>
                                <div style="display: flex;">
                                    <div class="text-label" style="width: 100%;display: block;">
                                        <div style="cursor: pointer; width: 100%; padding: 15px;" class="inpLabel" data-input="#input-about">
                                            <?= $instansi['about'] ?? "" ?>
                                        </div>
                                    </div>
                                    <div id="input-about" style="width: 100%; display: none;">
                                        <textarea class="inpType" data-value="about" data-keydb="about" id="about">
                                    <?= $instansi['about'] ?? "" ?>
                                </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-12 mt-3">
                            <div class="cards py-3" style="z-index: 99; position: relative; background-color: #fff;">
                                <div class="betwen" style="padding-left: 15px; padding-right: 15px;">
                                    <h6>Visi</h6>
                                    <button class="btn btn-info btn-sm btn-editor-action-visi" style="display: none;" data-value="visi" data-keydb="visi"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                <hr>
                                <div style="display: flex;">
                                    <div class="text-label" style="width: 100%;display: block;">
                                        <div style="cursor: pointer; width: 100%; padding: 15px;" class="inpLabel" data-input="#input-visi">
                                            <?= $instansi['visi'] ?? "" ?>
                                        </div>
                                    </div>
                                    <div id="input-visi" style="width: 100%; display: none;">
                                        <textarea class="inpType" data-value="visi" data-keydb="visi" id="visi">
                                    <?= $instansi['visi'] ?? "" ?>
                                </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="cards py-3" style="z-index: 99; position: relative; background-color: #fff;">
                                <div class="betwen" style="padding-left: 15px; padding-right: 15px;">
                                    <h6>Misi</h6>
                                    <button class="btn btn-info btn-sm btn-editor-action-misi" style="display: none;" data-value="misi" data-keydb="misi"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                                <hr>
                                <div style="display: flex;">
                                    <div class="text-label" style="width: 100%;display: block;">
                                        <div style="cursor: pointer; width: 100%; padding: 15px;" class="inpLabel" data-input="#input-misi">
                                            <?= $instansi['misi'] ?? "" ?>
                                        </div>
                                    </div>
                                    <div id="input-misi" style="width: 100%; display: none;">
                                        <textarea class="inpType" data-value="misi" data-keydb="misi" id="misi">
                                    <?= $instansi['misi'] ?? "" ?>
                                </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ambil koordinat di google maps -->
                <!-- https://google-map-generator.com/ -->
                <div class="tab-pane fade" id="map-panel" role="tabpanel" aria-labelledby="map-panel-tab">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=-0.5109469179884031,%20101.55934025345285&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 100%;
                                }
                            </style><a href="https://www.embedgooglemap.net">embed google maps in gmail</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="media-sekolah" role="tabpanel" aria-labelledby="media-sekolah-tab">
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <div style="display: flex; justify-content: flex-end;">
                                <button class="btn btn-info btn-sm btn-upImg">
                                    <i class="fa fa-upload"></i> Ganti Gambar
                                </button>
                                <input type="file" name="image" id="image" style="display: none;">
                            </div>
                            <div style="display: flex;" id="pimpinan">
                                <div class="text-label" style="width: 100%; display: flex; justify-content: center; align-items: center;">
                                    <div style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; overflow: hidden; border-radius: 10px;">
                                        <a href="<?= base_url("assets/img/sekolah/" . $instansi['image']) ?>" target="_blank">
                                            <img src="<?= base_url("assets/img/sekolah/" . $instansi['image']) ?>" alt="" style="max-height: 400px; max-width: 100%;">
                                        </a>
                                    </div>
                                </div>
                                <div id="" style="width: 100%; display: none;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <div style="display: flex; justify-content: flex-end;">
                                <button class="btn btn-info btn-sm btn-upVid">
                                    <i class="fa fa-upload"></i> Ganti Vidio
                                </button>
                                <input type="file" name="video" id="vidio" style="display: none;">
                            </div>
                            <div style="display: flex;" id="pimpinan">
                                <div class="text-label" style="width: 100%; display: flex; justify-content: center; align-items: center;">
                                    <div style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; overflow: hidden; border-radius: 10px;">
                                        <a href="<?= base_url("assets/img/sekolah/" . $instansi['image']) ?>" target="_blank">
                                            <video controls style="max-height: 400px; max-width: 100%;">
                                                <source src="<?= base_url("assets/vidio/" . $instansi['video']) ?>" type="video/mp4">
                                            </video>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>