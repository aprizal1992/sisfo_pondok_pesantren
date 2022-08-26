  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
      <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">BERITA</h1>
      </div>
  </div>
  <!-- Page Header End -->


  <!-- About Start -->
  <div class="container-fluid overflow-hidden py-5 px-lg-0">
      <div class="container about py-5 px-lg-0">
          <div class="row g-5 mx-lg-0">
              <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid w-100" style="max-height: 400px;" src="<?= base_url("assets/img/berita/" . $berita['thm']) ?>" style="object-fit: cover;" alt="">
                  </div>
              </div>
              <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                  <h6 class="text-secondary text-uppercase mb-3"><?= tgl_i($berita['tanggal']) ?> <?= $berita['jam'] ?></h6>
                  <h1 class=""><?= $berita['judul'] ?></h1>
                  <p class="mb-5">
                      <?= $berita['artikel'] ?? "-" ?>
                  </p>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->