<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <?php if ($this->session->flashdata('flash-gagal')) : ?>
        <div class="flash-fail" data-flash="<?= $this->session->flashdata('flash-gagal'); ?>"></div>
        <?php unset($_SESSION['flash-gagal']); ?>
    <?php endif; ?>
    <div class="login-box">
        <div class="login-logo">
            <h3>Masuk Dashboard Admin</h3>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Start your session</p>

                <form action="<?= site_url('login/admin_auth') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center">
                        <div class="col-lg-6 mt-4">
                            <?= $captcha ?>
                        </div>
                        <div class="col-lg-6 ">
                            <input type="hidden" name="captcha-text" value="<?= $this->session->userdata('captchaCode') ?>">
                            <div class="container p-0">
                                <small>Kode Captcha *</small>
                                <input name="captcha" class="form-control" id="inputPassword3" required>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>

                </form>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/admin_template/') ?>dist/js/adminlte.min.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       
        var failAlert = $('.flash-fail').data('flash');

        if (failAlert) {
            Swal.fire({
                title: "Maaf!",
                text: failAlert,
                icon: "warning"
            });
        }
    </script>
</body>

</html>