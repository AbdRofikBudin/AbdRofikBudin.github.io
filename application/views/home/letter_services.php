<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin_template/') ?>plugins/fontawesome-free/css/all.min.css">
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
            <p class="text-center d-none d-lg-block" style="margin-left: -120px;">Jl. Raya Medina No. 5, Lafeu, Bungku Pesisir, <br>
                Morowali, Sulawesi Tengah 12731</p>
            <a class="btn btn-outline-secondary" href="<?= ($this->session->userdata('is_logged')) ? site_url('Dashboard/user') : site_url('Login') ?>"><?= ($this->session->userdata('is_logged')) ? $this->session->userdata('username') : "Masuk" ?></a>
        </div>
    </nav>

    <section id="heading">
        <div class="container-fluid p-5" style="background-color: #c4c4c7;">
            <h1 class="fw-bold text-black text-center">Formulir Permohonan</h1>
            <div class="container d-flex justify-content-center">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= site_url('Home') ?>"><i class="fas fa-home text-black"></i></a></li>
                        <li class="breadcrumb-item">Pengajuan Surat</li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan <?= ucfirst($service) ?></li>
                    </ol>
                </nav>
            </div>

        </div>
    </section>

    <section id="information" class="mt-5">
        <div class="container">
            <div class="alert alert-warning alert-dismissible fade show p-4" role="alert">
                <div class="container border-bottom border-black p-0">
                    <h3 class="fw-semibold">Informasi</h3>
                    <p>Persyaratan permohonan <?= ucfirst($service) ?></p>
                </div>
                <div class="container p-0 mt-4">
                    <h5>Catatan : </h5>
                    <ul>
                        <li>Pastikan dokumen yang diunggah berupa scan/foto dokumen <span class="fw-bold">ASLI</span> dan dapat <span class="fw-bold">TERBACA</span> dengan jelas.</li>
                        <li>Standar waktu proses 3 (tiga) hari kerja terhitung sejak data formulir divalidasi serta dinyatakan lengkap dan benar.</li>
                    </ul>
                </div>
                <div class="container p-0 mt-4">
                    <h5 class="fw-bold">Penting ! </h5>
                    <p class="fst-italic">Setiap pengguna hanya dapat mengajukan satu (1) pengajuan untuk setiap layanan yang ada sampai pengajuan sebelumnya ditolak / terselesaikan, mohon untuk mengisi data Anda dengan benar dan jelas sesuai dengan persyaratan yang tertera.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>

    </section>

    <section id="form" class="mt-5">
        <form action="<?= site_url('Home/letter_request_action') ?>" method="post">
            <div class="container">
                <h3 class="fw-semibold">Data Pelapor</h3>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">NIK Pelapor</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik" value="<?= $user_identity['nik'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap Pelapor</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= $user_identity['applicant_name'] ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir Pelapor</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tempat-lahir" value="<?= ucfirst($user_identity['place_of_birth'])  ?>" disabled>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-5">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir Pelapor</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal-lahir" value="<?= $user_identity['date_of_birth'] ?>" disabled>
                        </div>
                    </div>

                    <?php if ($this->uri->segment(3) == "kurang-mampu" || $this->uri->segment(3) == "pengantar-nikah") : ?>
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Alamat Pemohon *</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value="<?= ucfirst($user_identity['address'])  ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Pekerjaan Pemohon *</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pekerjaan-pemohon"  required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Agama *</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="agama" value="<?= ucfirst($user_identity['religion']) ?>" disabled>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <?= $contents ?>
            <div class="container d-flex justify-content-end gap-2 mb-5">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Kirim Permohonan</button>
            </div>
        </form>
    </section>

    <div class="container-fluid">
        <footer class="py-3 my-4  border-top">
            <p class="text-center text-body-secondary">Hak Cipta @2024 — Aplikasi Pelayanan Publik Desa Lafeu | Dikembangkan untuk Tugas Akhir</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>