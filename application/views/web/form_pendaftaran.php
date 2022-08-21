  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
      <div class="container py-5">
          <h4 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 2.5em;">FORM PENDAFTARAN SISWA BARU TAHUN <?= date("Y") ?></h4>
      </div>
  </div>

  <!-- About Start -->
  <div class="container overflow-hidden py-5 px-lg-0">
      <div class="container about py-5 px-lg-0">
          <div class="row">
              <div class="col-md-4">
                  <div>
                      <h3>Syarat Pendaftaran</h3>
                      <ol>
                          <li>syarat 1</li>
                          <li>syarat 2</li>
                          <li>syatat 3</li>
                      </ol>
                      <p>
                          syarat di upload dalam bentuk Zip
                      </p>
                  </div>
                  <div style="margin-top: 20px;">
                      <div class="cards" style="background-color: #F7E999; padding: 20px;">
                          <p>
                              Pastikan No HP yang anda daftarkan adalah Nomor whatsapp yang aktif. <br>
                              Notifikasi penerimaan akan dikirimkan melalui Whatsapp. <br>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-md-8">
                  <!--alert -->
                  <?php if (!empty($this->session->flashdata("success"))) : ?>
                      <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                          Pendaftaran berhasil. Silahkan tunggu konfirmasi dari kami. akan di kirm ke nomor whatsapp anda.
                      </div>
                  <?php endif ?>
                  <?php if (!empty($this->session->flashdata("error"))) : ?>
                      <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
                          Pendaftaran gagal. Silahkan coba lagi.
                      </div>
                  <?php endif ?>

                  <form action="<?= base_url("Sisfo/daftar") ?>" method="post" enctype="multipart/form-data">
                      <div class="cards p-5">
                          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                              <h4 class="mb-5">FORM PENDAFTARAN</h4>
                          </div>
                          <div class="row g-4">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="tahun">Tahun</label>
                                      <input type="text" name="tahun" class="form-control form-control-sm" id="tahun" placeholder="Tahun" readonly value="<?= date("Y") ?>">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="nama">Nama</label>
                                      <input type="text" name="nama" class="form-control form-control-sm" id="nama" placeholder="Nama">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="jk">Jenis Kelamin</label>
                                      <select name="jk" class="form-control form-control-sm" id="jk">
                                          <option value="Laki-Laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="tgl_lahir">Tanggal Lahir</label>
                                      <input type="date" name="tgl_lahir" class="form-control form-control-sm" id="tgl_lahir" placeholder="Tanggal Lahir">
                                  </div>
                              </div>


                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="no_hp">No HP (WhatsApp) <i><b>harus diawali dengan +62</b></i></label>
                                      <input type="text" name="no_hp" class="form-control form-control-sm" id="no_hp" placeholder="No HP">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="provinsi">Provinsi</label>
                                      <select name="provinsi" class="form-control form-control-sm" id="provinsi">
                                          <option value="">Pilih Provinsi</option>
                                          <?php foreach ($provinsi as $v) : ?>
                                              <option value="<?= $v['id'] ?>"><?= $v['nama'] ?></option>
                                          <?php endforeach ?>
                                      </select>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="kabupaten">Kabupaten</label>
                                      <select name="kabupaten" class="form-control form-control-sm" id="kabupaten">
                                          <option value="">Pilih Kabupaten</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="kecamatan">Kecamatan</label>
                                      <select name="kecamatan" class="form-control form-control-sm" id="kecamatan">
                                          <option value="">Pilih Kecamatan</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="alamat">Alamat Lengkap (Jalan, Rt/Rw)</label>
                                      <textarea name="alamat" class="form-control form-control-sm" id="alamat" rows="3"></textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="agama">Agama</label>
                                      <select name="agama" class="form-control form-control-sm" id="agama">
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
                                      <label for="dokument">Upload Syarat dalam bentuk (zip/rar)</label>
                                      <input type="file" name="dokument" class="form-control form-control-sm" id="dokument" accept=".zip,.rar,.7zip" placeholder="Dokument" require>
                                  </div>
                              </div>
                              <hr>
                              <div class="col-md-12">
                                  <div class="form-group" style="display: flex; justify-content: flex-end;">
                                      <button type="submit" class="btn btn-primary btn-sm">Daftar</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->