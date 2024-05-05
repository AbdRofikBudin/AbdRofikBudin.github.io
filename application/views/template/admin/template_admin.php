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
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
      #Fullscreen {
          width: 100%;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          background: rgba(0, 0, 0, 0.8);
          display: flex;
          justify-content: center;
          align-items: center;
      }

      #Fullscreen img {
          max-width: 100%;
          max-height: 100%;
      }

      #FullscreenKK {
          width: 100%;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          background: rgba(0, 0, 0, 0.8);
          display: flex;
          justify-content: center;
          align-items: center;
      }

      #FullscreenKK img {
          max-width: 100%;
          max-height: 100%;
      }

      #FullscreenUsaha {
          width: 100%;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          background: rgba(0, 0, 0, 0.8);
          display: flex;
          justify-content: center;
          align-items: center;
      }

      #FullscreenUsaha img {
          max-width: 100%;
          max-height: 100%;
      }

      #FullscreenMove {
          width: 100%;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          background: rgba(0, 0, 0, 0.8);
          display: flex;
          justify-content: center;
          align-items: center;
      }

      #FullscreenMove img {
          max-width: 100%;
          max-height: 100%;
      }

      #FullscreenBirth {
          width: 100%;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          background: rgba(0, 0, 0, 0.8);
          display: flex;
          justify-content: center;
          align-items: center;
      }

      #FullscreenBirth img {
          max-width: 100%;
          max-height: 100%;
      }

  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url('assets/admin_template/') ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= site_url('adminpanel') ?>" class="nav-link">Dashboard</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img class="rounded-circle" width="32" alt="Image placeholder" src="https://ui-avatars.com/api/?name=<?= $this->session->userdata('username') ?>&background=random&color=fff">
                    </div>
                    <div class="info">
                        <a href="<?= site_url('adminpanel') ?>" class="d-block"><?= $this->session->userdata('username') ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= site_url('adminpanel') ?>" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('adminpanel/application_management') ?>" class="nav-link">

                                <i class="nav-icon fas fa-tasks"></i>
                                <p>
                                    Manajemen Permohonan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('adminpanel/mailing_management') ?>" class="nav-link">

                                <i class="nav-icon fas fa-file-pdf"></i>
                                <p>
                                    Permintaan Dokumen
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?= site_url('Login/signout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Logout

                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <?= $contents ?>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/admin_template/') ?>dist/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url('assets/admin_template/') ?>dist/js/pages/dashboard.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/admin_template/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function() {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        $(document).ready(function() {
            $('.ktp').click(function() {
                var src = $(this).attr('src'); // Dapatkan atribut src dari gambar yang diklik
                $('#Fullscreen img').attr('src', src); // Tetapkan src ke tag img untuk div fullscreen
                $('#Fullscreen').fadeIn(); // Tampilkan div fullscreen
            });
            $('#Fullscreen').click(function() {
                $(this).fadeOut(); // Sembunyikan div fullscreen jika klik diluar gambar
            });
        });

        $(document).ready(function() {
            $('.kk').click(function() {
                var src = $(this).attr('src'); // Dapatkan atribut src dari gambar yang diklik
                $('#FullscreenKK img').attr('src', src); // Tetapkan src ke tag img untuk div fullscreen
                $('#FullscreenKK').fadeIn(); // Tampilkan div fullscreen
            });
            $('#FullscreenKK').click(function() {
                $(this).fadeOut(); // Sembunyikan div fullscreen jika klik diluar gambar
            });
        });

        $(document).ready(function() {
            $('.usaha').click(function() {
                var src = $(this).attr('src'); // Dapatkan atribut src dari gambar yang diklik
                $('#FullscreenUsaha img').attr('src', src); // Tetapkan src ke tag img untuk div fullscreen
                $('#FullscreenUsaha').fadeIn(); // Tampilkan div fullscreen
            });
            $('#FullscreenUsaha').click(function() {
                $(this).fadeOut(); // Sembunyikan div fullscreen jika klik diluar gambar
            });
        });

        $(document).ready(function() {
            $('.move').click(function() {
                var src = $(this).attr('src'); // Dapatkan atribut src dari gambar yang diklik
                $('#FullscreenMove img').attr('src', src); // Tetapkan src ke tag img untuk div fullscreen
                $('#FullscreenMove').fadeIn(); // Tampilkan div fullscreen
            });
            $('#FullscreenMove').click(function() {
                $(this).fadeOut(); // Sembunyikan div fullscreen jika klik diluar gambar
            });
        });

        $(document).ready(function() {
            $('.birth').click(function() {
                var src = $(this).attr('src'); // Dapatkan atribut src dari gambar yang diklik
                $('#FullscreenBirth img').attr('src', src); // Tetapkan src ke tag img untuk div fullscreen
                $('#FullscreenBirth').fadeIn(); // Tampilkan div fullscreen
            });
            $('#FullscreenBirth').click(function() {
                $(this).fadeOut(); // Sembunyikan div fullscreen jika klik diluar gambar
            });
        });
    </script>
</body>

</html>