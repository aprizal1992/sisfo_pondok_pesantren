  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
      <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang</h1>
      </div>

  </div>
  <!-- Page Header End -->


  <!-- About Start -->
  <div class="container-fluid overflow-hidden py-5 px-lg-0">
      <div class="container about py-5 px-lg-0">
          <div class="row g-5 mx-lg-0">
              <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url("assets/img/sekolah/" . $data['image']) ?>" style="object-fit: cover;" alt="">
                  </div>
              </div>
              <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                  <h6 class="text-secondary text-uppercase mb-3">TENTANG</h6>
                  <h1 class="mb-5">PESANTREN NURUL ISLAM KAMPUNG BARU GUNUNG TOAR</h1>
                  <p class="mb-5">
                      <?= $data['about'] ?? "-" ?>
                  </p>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->

  <!-- Media -->
  <div class="container-xxl py-5">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="mb-5">VISI</h1>
          </div>
          <div class="row">
              <!-- VIDEO -->
              <div class="col-12">
                  <?= $data['visi'] ?>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->


  <!-- Media -->
  <div class="container-xxl py-5">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="mb-5">MISI</h1>
          </div>
          <div class="row">
              <!-- VIDEO -->
              <div class="col-12">
                  <?= $data['misi'] ?>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->


  <!-- Media -->
  <div class="container-xxl py-5">
      <div class="container py-5">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="mb-5">SEJARAH</h1>
          </div>
          <div class="row">
              <!-- VIDEO -->
              <div class="col-12">
                  <?= $data['sejarah'] ?>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->