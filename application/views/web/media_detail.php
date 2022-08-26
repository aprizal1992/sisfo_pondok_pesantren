  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
      <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">MEDIA</h1>
      </div>
  </div>
  <!-- Page Header End -->


  <!-- About Start -->
  <div class="container-fluid overflow-hidden py-5 px-lg-0">
      <div class="container about py-5 px-lg-0">
          <div class="row g-5 mx-lg-0">
              <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <div class="row g-4">
                          <?php
                            $m = json_decode($media["foto"]);
                            foreach ($m as $vas) : ?>
                              <a href="<?= base_url("assets/img/media/" . $vas) ?>" target="_blank">
                                  <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                                      <div class="service-item p-4">
                                          <div class="overflow-hidden mb-4">
                                              <img class="img-fluid" src="<?= base_url("assets/img/media/" . $vas) ?>" style="height: 150px; width: 100%;" alt="">
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          <?php endforeach ?>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                  <h6 class="text-secondary text-uppercase mb-3"><?= tgl_i($media['tanggal']) ?> <?= $media['jam'] ?></h6>
                  <h1 class=""><?= $media['judul'] ?></h1>
                  <p class="mb-5">
                      <?= $media['keterangan'] ?? "-" ?>
                  </p>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->