<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin</title>
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>css/style.css" />
    <link rel="shortcut icon" href="<?= base_url("assets/admin/") ?>images/favicon.png" />
</head>

<body>
    <div class="container-scroller" style="
    background-image: url('<?= base_url("assets/img/bg.jpg") ?>');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    ">
        <div class="container-fluid">
            <div class="row">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages" style="background-color: rgba(255,255,255,.5);">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Login</h3>
                            <form action="<?= base_url("Login/auth") ?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control p_input" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="password" class="form-control p_input" placeholder="Password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url("assets/admin/") ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url("assets/admin/") ?>js/misc.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= base_url("assets/js/axios/dist/axios.min.js") ?>"></script>
    <?php if (!empty($this->session->flashdata("success"))) : ?>
        <script>
            swal({
                title: "Good job!",
                text: "<?= $this->session->flashdata("success") ?>",
                icon: "success",
                button: "ok",
            });
        </script>
    <?php endif ?>
    <?php if (!empty($this->session->flashdata("error"))) : ?>
        <script>
            swal({
                title: "Oops!",
                text: "<?= $this->session->flashdata("error") ?>",
                icon: "error",
                button: "ok",
            });
        </script>
    <?php endif ?>
</body>

</html>