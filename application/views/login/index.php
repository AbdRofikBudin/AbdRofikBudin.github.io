<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200&display=swap" rel="stylesheet">

    <style>
        * {

            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>
    <div class="container d-flex mt-4 brand-info">
        <img src="<?= base_url('assets/img/morowali.png') ?>" alt="morowali logo" width="40" height="50">
        <p class="fw-normal ms-2">
            <span class="fw-semibold">Pelayanan Online</span>
            <br>
            Kantor Desa Lafeu
        </p>
    </div>

    <main class="mt-4">

        <div class="container mt-4 d-flex flex-row justify-content-center align-items-center px-5" style="height: 80vh;">
            <div class="row  flex-fill">
                <div class="col text-center p-4 rounded shadow">
                    <div class="container text-center mb-4">
                        <h1 class="display-6 fw-medium">Login User</h1>
                    
                        <?php if ($this->session->userdata('flash')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Yeayy!</strong> <?= $this->session->userdata('flash') ?>.
                                <?= $this->session->unset_userdata('flash') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                        <?php if ($this->session->userdata('flash-gagal')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Maaf!</strong> <?= $this->session->userdata('flash-gagal') ?>.
                                <?= $this->session->unset_userdata('flash-gagal') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>

                    </div>
                    <form action="<?= site_url('Login/auth') ?>" method="post">

                        <div class="row mb-3 align-middle">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Username</label>
                            <div class="col-sm-10">
                                <input name="username" class="form-control" id="inputEmail3" value="<?= set_value('username') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-start">Password</label>
                            <div class="col-sm-10">
                                <input name="password" class="form-control" id="inputPassword3" type="password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-start">Captcha</label>
                            <div class="col-sm-3">
                                <input type="hidden" name="captcha-text" value="<?= $this->session->userdata('captchaCode') ?>">
                                <input name="captcha" class="form-control" id="inputPassword3" required>
                            </div>
                            <div class="col-sm-2">
                                <?= $captcha ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary text-center mt-3">Login</button>
                    </form>
                </div>
                <div class="col text-center my-auto">
                    <img src="<?= base_url('assets/img/morowali.png') ?>" alt="morowali logo" style="width: 80pt;">
                    <p class="fw-normal mt-3 ms-2">
                        <span class="fw-semibold">Bersama Lebih Hebat</span>
                        <br>
                        Kantor Desa Lafeu
                    </p>
                </div>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>