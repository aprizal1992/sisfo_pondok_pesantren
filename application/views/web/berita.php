  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
      <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">BERITA</h1>
      </div>

  </div>
  <!-- Page Header End -->
  <!-- Service Start -->
  <div class="container-xxl py-5">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="text-secondary text-uppercase">BERITA</h6>
              <h1 class="mb-5">Berita & Informasi Seputar Pondok</h1>
          </div>
          <div class="row g-4">
              <?php foreach ($berita as $v) : ?>
                  <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="service-item p-4">
                          <div class="overflow-hidden mb-4">
                              <img class="img-fluid" src="<?= base_url("assets/img/berita/" . $v['thm']) ?>" style="height: 150px; width: 100%;" alt="">
                          </div>
                          <h5 class="mb-3"><?= $v['judul'] ?></h5>
                          <?= substrwords(strip_tags($v['artikel']) ?? "", 100) ?>
                          <div>
                              <small style="font-size: .6em"><?= tgl_i($v['tanggal']) ?></small>
                          </div>
                          <a class="btn-slide mt-2" href="<?= base_url("Sisfo/berita_detail/" . $v["id"]) ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                      </div>
                  </div>
              <?php endforeach ?>
          </div>
      </div>
  </div>
  <!-- Service End -->