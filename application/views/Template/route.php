<?php $admin_asets_url = base_url("assets/admin/static/"); ?>
<?php
if (empty($this->session->userdata())) {
    redirect("Login/index");
}
$sessions = $this->session->userdata();
?>
<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-info" style="margin-bottom: 0px;">
        <img src="https://www.uc.ac.id/lppm/wp-content/uploads/2020/09/user.jpg" alt="">
        <p class="name"><?= $sessions['user']['nama'] ?? "-" ?></p>
        <p class="designation"><?= $sessions['user']['jabatan'] ?? "-" ?></p>
    </div>
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html" style="display: flex; align-items: center;">
                <i class="fa fa-folder"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#daftaran" aria-expanded="false" aria-controls="daftaran">
                <i class="fa fa-folder"></i>
                <span class="menu-title">Pendaftaran<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="daftaran">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("Pendaftaran/index") ?>" style="display: flex; align-items: center;">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-title">Pendaftaran Baru</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("Pendaftaran/siswa_daftar_ulang") ?>" style="display: flex; align-items: center;">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-title">Siswa Daftar Ulang</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <i class="fa fa-folder"></i>
                <span class="menu-title">Data Siswa<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("Siswa/index") ?>" style="display: flex; align-items: center;">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-title">Siswa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("Siswa/Kelas") ?>" style="display: flex; align-items: center;">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-title">Kelas</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url("Guru/index") ?>" style="display: flex; align-items: center;">
                <i class="fa fa-folder"></i>
                <span class="menu-title">Guru</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sekolah" aria-expanded="false" aria-controls="sample-pages">
                <i class="fa fa-folder"></i>
                <span class="menu-title">Sekolah<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="sekolah">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("Instansi/index") ?>" style="display: flex; align-items: center;">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-title">Data Sekolah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("Media/index") ?>" style="display: flex; align-items: center;">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-title">Media</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("Berita/index") ?>" style="display: flex; align-items: center;">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-title">berita</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url("Login/logout") ?>" style="display: flex; align-items: center;">
                <i class="fa fa-dot-circle-o"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>