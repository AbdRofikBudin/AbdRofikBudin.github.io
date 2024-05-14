<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200&display=swap" rel="stylesheet">

    <style>
        * {

            font-family: "Poppins", sans-serif;
        }

        .carousel-item {
            height: 80vh;
            /* Adjust the height as needed */
        }

        .carousel-item img {
            object-fit: cover;
            object-position: center;
            height: 100%;
            /* Ensures the image takes up the full height of the carousel item */
            width: 100%;
            /* Ensures the image takes up the full width of the carousel item */
        }
    </style>
</head>

<body>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="flash-success" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('flash-gagal')) : ?>
        <div class="flash-fail" data-flash="<?= $this->session->flashdata('flash-gagal'); ?>"></div>
        <?php unset($_SESSION['flash-gagal']); ?>
    <?php endif; ?>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand d-flex" href="<?= site_url('Home') ?>">
                <img src="<?= base_url('assets/img/morowali.png') ?>" alt="Logo" width="40" height="50" class="d-inline-block align-text-top">
                <p class="fw-normal ms-2 fs-6">
                    <span class="fw-semibold">Sistem Pelayanan Publik</span>
                    <br>
                    Desa Lafeu
                </p>
            </a>
            <p class="text-center d-none d-lg-block" style="margin-left: -120px;">Lr. Puskesmas Lafeu No. <br>
            Desa Lafeu Kode Pos 94981</p>
            <a class="btn btn-outline-secondary" href="<?= ($this->session->userdata('is_logged')) ? site_url('Dashboard/user') : site_url('Login') ?>"><?= ($this->session->userdata('is_logged')) ? $this->session->userdata('username') : "Masuk" ?></a>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slide1.jpeg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-flex flex-column justify-content-center h-100">
                    <h1 class="fw-semibold"><span class="text-black">Portal Pelayanan</span> <br> Administrasi Desa Lafeu</h1>
                    <p>Permohonan administratif sekarang lebih mudah <br> dan praktis dengan Aplikasi Pelayanan Publik <br> Desa Lafeu!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slide2.jpeg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-flex flex-column justify-content-center h-100">
                    <h1 class="fw-semibold"><span class="text-black">Portal Pelayanan</span> <br> Administrasi Desa Lafeu</h1>
                    <p>Permohonan administratif sekarang lebih mudah <br> dan praktis dengan Aplikasi Pelayanan Publik <br> Desa Lafeu!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slide3.jpeg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none  d-md-flex flex-column justify-content-center h-100">
                    <h1 class="fw-semibold"><span class="text-black">Portal Pelayanan</span> <br> Administrasi Desa Lafeu</h1>
                    <p>Permohonan administratif sekarang lebih mudah <br> dan praktis dengan Aplikasi Pelayanan Publik <br> Desa Lafeu!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="Pelayanan" class="mt-4">
        <div class="container  d-flex justify-content-center ">
            <p class="mt-3 fw-semibold p-3 shadow rounded border border-3 border-light text-center fs-4" style="width: 628px;">JAM PELAYANAN KANTOR</p>
        </div>

        <div class="container text-center mt-3">
            <div class="row justify-content-md-center">
                <div class="col-lg-3 col-12">
                    <p>Senin s.d Kamis</p>
                </div>
                <div class="col-lg-3 col-12">
                    <p>Jumat</p>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col-lg-3 col-12">
                    <p class="fw-bold fs-5">08.00 - 14.00 WIT</p>
                </div>
                <div class="col-lg-3 col-12">
                    <p class="fw-bold fs-5">08.00 - 14.00 WIT</p>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" style="margin-top: 10vh; margin-bottom: 20vh;">
        <div class="container text-center">
            <h2 class="fw-bold fs-3 mt-5">LAYANAN</h2>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-3 mb-5">
                    <a href="<?= site_url('Home/layanan_surat/kematian') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Keterangan Kematian</h5>
                    </a>
                </div>
                <div class="col-lg-3 mb-5">
                    <a href="<?= site_url('Home/layanan_surat/kelahiran') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Keterangan Lahir</h5>
                    </a>

                </div>
                <div class="col-lg-3 mb-5">
                    <a href="<?= site_url('Home/layanan_surat/kepindahan') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Pindah Kependudukan</h5>
                    </a>
                </div>
                <div class="col-lg-3 mb-5">
                    <a href="<?= site_url('Home/layanan_surat/kedatangan') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Keterangan Datang</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="<?= site_url('Home/layanan_surat/usaha') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Keterangan Usaha</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="<?= site_url('Home/layanan_surat/kurang-mampu') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Keterangan Kurang
                            Mampu</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="<?= site_url('Home/layanan_surat/pengantar-nikah') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Pengantar Nikah</h5>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="<?= site_url('Home/layanan_surat/izin-kegiatan') ?>" class="text-decoration-none">
                        <div class="img-placeholder container shadow bg-success rounded-circle" style="width: 175px; height: 175px;"></div>
                        <h5 class="text-black mt-4">Surat Izin Berkegiatan</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <footer class="py-3 my-4  border-top">
            <p class="text-center text-body-secondary">Hak Cipta @2024 — Aplikasi Pelayanan Publik Desa Lafeu | Dikembangkan untuk Tugas Akhir</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
       
        var successAlert = $('.flash-success').data('flash');

        if (successAlert) {
            Swal.fire({
                title: "Yeayy!",
                text: "Pengajuan Surat Berhasil Dilakukan, Cek Progress Pada Dashboard Anda",
                icon: "success"
            });
        }

        var failAlert = $('.flash-fail').data('flash');
       
        if (failAlert) {
            Swal.fire({
                title: "Maaf!",
                text: "Saat ini masih ada surat yang sedang diproses tunggu hingga selesai yah!",
                icon: "warning"
            });
        }
    </script>
</body>

</html>