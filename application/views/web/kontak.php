  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
      <div class="container py-5">
          <h1 class="display-3 text-white mb-3 animated slideInDown">KONTAK</h1>
      </div>

  </div>
  <!-- Page Header End -->


  <!-- Quote Start -->
  <div class="container-fluid overflow-hidden py-5 px-lg-0">
      <div class="container contact-page py-5 px-lg-0">
          <div class="row g-5 mx-lg-0" style="height: 500px;">
              <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                  <h6 class="text-secondary text-uppercase">Kontak</h6>
                  <h4 class="text-dark mb-4">Alamat</h4>
                  <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> <?= $data['nama_provinsi'] ?>, <?= $data['nama_kabupaten'] ?>, <?= $data['nama_kecamatan'] ?>, <?= $data['alamat'] ?></p>
                  <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $data['no_telp'] ?></p>
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $data['email_instansi'] ?></p>
              </div>
              <div class="col-md-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s">
                  <div class="position-relative h-100">
                      <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://maps.google.com/maps?q=-0.5109469179884031,%20101.55934025345285&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Quote End -->