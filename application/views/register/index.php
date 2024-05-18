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

        .input-group-pass {
            display: flex;
            align-items: center;
        }

        .input-group-pass button {
            margin-left: -1px;
        }
    </style>
</head>

<body>
    <div class="container d-flex mt-4 brand-info">
        <img src="<?= base_url('assets/img/morowali.png') ?>" alt="morowali logo" style="width: 30pt;">
        <p class="fw-normal ms-2">
            <span class="fw-semibold">Pelayanan Online</span>
            <br>
            Kantor Desa Lafeu
        </p>
    </div>

    <main class="mt-4">

        <div class="container mt-4 form-box">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-8 text-center p-4 rounded shadow">
                    <div class="container text-center mb-4">
                        <h1 class="display-6 fw-medium">User Register</h1>
                        <?php if ($this->session->flashdata('flash')) : ?>
                            <div class="flash-success" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
                            <?php unset($_SESSION['flash']); ?>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('flash-gagal')) : ?>
                            <div class="flash-fail" data-flash="<?= $this->session->flashdata('flash-gagal'); ?>"></div>
                            <?php unset($_SESSION['flash-gagal']); ?>
                        <?php endif; ?>
                        <?php if ($error) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Maaf!</strong>
                                <?= (form_error('nik')) != "" ? "<br>" . form_error('nik') . "." :  "" ?>
                                <?= (form_error('email')) != "" ? "<br>" . form_error('email') . "." :  "" ?>
                                <?= (form_error('nama')) != "" ? "<br>" . form_error('nama') . "." :  "" ?>
                                <?= (form_error('username')) != "" ? "<br>" . form_error('username') . "." :  "" ?>
                                <?= (form_error('tempat-lahir')) != "" ? "<br>" . form_error('tempat-lahir') . "." :  "" ?>
                                <?= (form_error('tanggal-lahir')) != "" ? "<br>" . form_error('tanggal-lahir') . "." :  "" ?>
                                <?= (form_error('alamat')) != "" ? "<br>" . form_error('alamat') . "." :  "" ?>
                                <?= (form_error('password')) != "" ? "<br>" . form_error('password') . "." :  "" ?>
                                <?= (form_error('captcha')) != "" ? "<br>" . form_error('captcha') . "." :  "" ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif ?>
                    </div>
                    <form action="<?= site_url('Register/registerUser') ?>" method="post" class="mb-3">
                        <div class="row mb-3">

                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">NIK</label>
                            <div class="col-sm-10 text-start">
                                <input name="nik" class="form-control" id="inputEmail3" value="<?= set_value('nik') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input name="nama" class="form-control" id="inputEmail3" value="<?= set_value('nama') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Gender</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="gender">
                                    <option value="1">Pria</option>
                                    <option value="0">Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input name="tempat-lahir" class="form-control" id="inputEmail3" value="<?= set_value('tempat-lahir') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal-lahir" class="form-control" id="inputEmail3" value="<?= set_value('tanggal-lahir') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Agama </label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="agama">
                                    <option value="islam">Islam</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Alamat</label>
                            <div class="col-sm-10">
                                <input name="alamat" class="form-control" id="inputEmail3" value="<?= set_value('alamat') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Email</label>
                            <div class="col-sm-10">
                                <input name="email" class="form-control" id="inputEmail3" value="<?= set_value('email') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-start">Username</label>
                            <div class="col-sm-10">
                                <input name="username" class="form-control" id="inputEmail3" value="<?= set_value('username') ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword4" class="col-sm-2 col-form-label text-start">Password</label>
                            <div class="col-sm-10">
                                <div class="container p-0 input-group-pass">
                                    <input name="password" class="form-control" id="inputPassword4" type="password">
                                    <button type="button" class="btn btn-outline-secondary" id="togglePassword2">
                                        Show
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-start">Confirm Password</label>
                            <div class="col-sm-10">
                                <div class="container p-0 input-group-pass">
                                    <input name="confirm-password" class="form-control" id="inputPassword3" type="password">
                                    <button type="button" class="btn btn-outline-secondary" id="togglePassword3">
                                        Show
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label text-start">Agreement</label>
                            <div class="col-sm-10 text-start">
                            <input  type="checkbox" class="form-check-input" id="agreementCheck" name="agreement" required>
                            <label class="form-check-label" for="agreementCheck">
                               Dengan ini saya menyatakan bahwa data yang saya masukan benar adanya.
                            </label>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-start">Captcha</label>
                            <div class="col-sm-2">
                                <input type="hidden" name="captcha-text" value="<?= $this->session->userdata('captchaCode') ?>">
                                <input name="captcha" class="form-control" id="inputPassword3" required>
                            </div>
                            <div class="col-sm-2">
                                <?= $captcha ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary text-center mt-3">Buat Akun</button>
                    </form>
                    <P>Sudah Punya Akun ? <a href="<?= site_url('Login') ?>" class="mt-5">Login</a></P>
                </div>
                <div class="col">

                </div>
            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var successAlert = $('.flash-success').data('flash');

        if (successAlert) {
            Swal.fire({
                title: "Yeayy!",
                text: successAlert,
                icon: "success"
            });
        }

        var failAlert = $('.flash-fail').data('flash');

        if (failAlert) {
            Swal.fire({
                title: "Maaf!",
                text: failAlert,
                icon: "warning"
            });
        }

        const togglePassword = document.getElementById('togglePassword3');
        const password = document.getElementById('inputPassword3');

        const togglePassword2 = document.getElementById('togglePassword2');
        const password2 = document.getElementById('inputPassword4');

        function setTogglePassword(thePassword, theToggle) {

            theToggle.addEventListener('click', function() {
                // Toggle the type attribute
                const type = thePassword.getAttribute('type') === 'password' ? 'text' : 'password';
                thePassword.setAttribute('type', type);

                // Toggle the button text
                this.textContent = type === 'password' ? 'Show' : 'Hide';
            });
        }

        setTogglePassword(password, togglePassword);
        setTogglePassword(password2, togglePassword2);
    </script>
</body>

</html>