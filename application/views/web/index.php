<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?= base_url("assets/img/sisfo/bg1.jpg") ?>" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">MADRASAH ALIYAH PONDOK PESANTREN</h5>
                            <h3 class="display-3 text-white animated slideInDown mb-4" style="font-size: 2.5em;">NURUL ISLAM KAMPUNG BARU GUNUNG TOAR</h3>
                            <a href="<?= base_url("Sisfo/form_pendaftaran") ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">DAFTAR DISINI</a>
                        </div>
                        <div class="col-4">
                            <?php if (!empty($data['broadcast']) && $data['broadcast'] != "") : ?>
                                <div class="testimonial-item p-4">
                                    <aside class="note-wrap note-yellow">
                                        <h5 class="mb-1">Info Penting</h5>
                                        <?= strip_tags($data['broadcast']) ?>
                                    </aside>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


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
            <h6 class="text-secondary text-uppercase">MEDIA</h6>
            <h1 class="mb-5">MEDIA KEGIATAN PONDOK</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($media as $m) :
                $fotos = $m['foto'] ?? "[]";
                $getThm = json_decode($fotos, true)[0];
            ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="<?= base_url("assets/img/media/" . $getThm) ?>" style="height: 150px; width: 100%;" alt="">
                        </div>
                        <h5 class="mb-3"><?= $m['judul'] ?></h5>
                        <?= substrwords(strip_tags($m['keterangan']) ?? "", 100) ?>
                        <div>
                            <small style="font-size: .6em"><?= tgl_i($m['tanggal']) ?></small>
                        </div>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Fact Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">INFORMASI</h6>
                <h1 class="mb-5">#SISWA & GURU</h1>
                <p class="mb-5">
                    Siswa yang mengikuti program pembelajaran di pesantren ini memiliki kesempatan untuk mengikuti kegiatan-kegiatan yang ada di pesantren ini.
                </p>
                <div class="d-flex align-items-center">
                    <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>KONTAK PONDOK</h6>
                        <h3 class="text-primary m-0"><?= $data['no_telp'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6">
                        <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-users fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up"><?= $this->db->get_where("siswa")->num_rows() ?></h2>
                            <p class="text-white mb-0">Jumlah Siswa</p>
                        </div>
                        <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-users fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up"><?= $this->db->get_where("guru")->num_rows() ?></h2>
                            <p class="text-white mb-0">Jumlah Guru</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-users fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up"><?= $this->db->get_where("pendaftaran", ["status" => "daftar", "tahun" => date("Y")])->num_rows() ?></h2>
                            <p class="text-white mb-0">Pendaftaran Tahun <?= date("Y") ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


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
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">HISTRY</h6>
                <h1 class="mb-5">Sejarah Singkat Madrasah</h1>
                <?= substrwords(strip_tags($data['sejarah']) ?? "", 800) ?> <a href="">Lebih lengkap</a>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url("assets/img/sisfo/bg2hp.jpg") ?>" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->





<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">MEDIA</h6>
            <h1 class="mb-0">MEDIA KEGIATAN PONDOK</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            <?php foreach ($media as $m) :
                $fotos = $m['foto'] ?? "[]";
                $getThm = json_decode($fotos, true)[0];
            ?>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="<?= base_url("assets/img/media/" . $getThm) ?>" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1"><?= $m['judul'] ?></h5>
                            <p class="m-0"><small style="font-size: .6em"><?= tgl_i($m['tanggal']) ?></small></p>
                        </div>
                    </div>
                    <p class="mb-0"><?= substrwords(strip_tags($m['keterangan']) ?? "", 100) ?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Media -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">MEDIA</h6>
            <h1 class="mb-5">VIDIO</h1>
        </div>
        <div class="row">
            <!-- VIDEO -->
            <div class="col-3"></div>
            <divc class="col-6">
                <video id="my-video" class="video-js" controls preload="auto" width="600px" data-setup="{}">
                    <source src="<?= base_url("assets/vidio/" . $data['video']) ?>" type="video/mp4" />
                </video>
            </divc>
        </div>
    </div>
</div>
<!-- Service End -->

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