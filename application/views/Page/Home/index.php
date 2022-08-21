<h3 class="page-heading mb-4">Dashboard</h3>
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <h4 class="text-info">
                            <i class="fa fa-users fa-3x mb-3"></i>
                        </h4>
                    </div>
                    <div class="float-right">
                        <p class="card-text text-dark">JUMLAH SISWA</p>
                        <h4 class="bold-text"><?= $this->db->get_where("siswa")->num_rows() ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <h4 class="text-info">
                            <i class="fa fa-users fa-3x mb-3"></i>
                        </h4>
                    </div>
                    <div class="float-right">
                        <p class="card-text text-dark">JUMLAH GURU</p>
                        <h4 class="bold-text"><?= $this->db->get_where("siswa")->num_rows() ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
        <div class="card card-statistics">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left">
                        <h4 class="text-info">
                            <i class="fa fa-users fa-3x mb-3"></i>
                        </h4>
                    </div>
                    <div class="float-right">
                        <p class="card-text text-dark">PENDAFTAR</p>
                        <h4 class="bold-text"><?= $this->db->get_where("pendaftaran", ["status" => "daftar", "tahun" => date("Y")])->num_rows() ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cards">
    <img class="img-fluid" src="<?= base_url("assets/img/sisfo/bg1.jpg") ?>" alt="" style="width: 100%; height: 400px;">
</div>