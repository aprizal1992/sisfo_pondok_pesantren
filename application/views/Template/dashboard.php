<?php $admin_asets_url = base_url("assets/admin/static/"); ?>
<?php
if (empty($this->session->userdata())) {
    redirect("Login/index");
}
$sessions = $this->session->userdata();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>node_modules/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Ubuntu:wght@500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        body.modal-open {
            overflow: hidden;
        }

        .cards {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            /* overflow: auto; */
        }

        table {
            font-size: .6em !important;
        }

        th {
            font-weight: bold !important;
            font-size: 1em !important;
        }

        tr>th {
            background-color: #b6b6b6 !important;
            white-space: nowrap;
        }

        .betwen {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        input {
            min-height: 20px !important;
        }

        .responsive {
            overflow-x: auto;
        }

        .modal-backdrop {
            z-index: -1;
        }

        .modal {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .sidebar .nav.sub-menu {
            padding-left: 5px !important;
        }

        .sidebar .nav .nav-item:last-child {
            margin-bottom: 0px !important;
        }
    </style>
</head>

<body>
    <div class="">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="height: 50px;">
            <div class="bg-white text-center navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="index.html" style="height: 50px;">
                    <!-- <h5 style="height: 100%;">title</h5> -->
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">

                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- partial -->
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:partials/_sidebar.html -->
                <?php $this->load->view('Template/route'); ?>
                <!-- partial -->
                <div class="content-wrapper">
                    <div class="w-100"><?php $this->load->view('Page/' . $path); ?></div>

                </div>
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="float-right">

                        </span>
                    </div>
                </footer>

                <!-- partial -->
            </div>
        </div>

    </div>

    <script src="<?= base_url("assets/admin/") ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>js/off-canvas.js"></script>
    <script src="<?= base_url("assets/admin/") ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url("assets/admin/") ?>js/misc.js"></script>
    <script src="<?= base_url("assets/admin/") ?>js/chart.js"></script>
    <script src="<?= base_url("assets/admin/") ?>js/maps.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <?php !empty($script) ? $this->load->view('Page/' . $script) : ""; ?>
</body>

</html>