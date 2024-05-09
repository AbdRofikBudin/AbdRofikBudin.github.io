  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Edit Profile User</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= site_url('dashboard/user') ?>">Home</a></li>
                          <li class="breadcrumb-item">Edit Profile</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="flash-success" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <?php if ($this->session->flashdata('flash-gagal')) : ?>
        <div class="flash-fail" data-flash="<?= $this->session->flashdata('flash-gagal'); ?>"></div>
        <?php unset($_SESSION['flash-gagal']); ?>
    <?php endif; ?>
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- general form elements disabled -->
              <div class="card card-warning">
                  <div class="card-header">
                      <h3 class="card-title">Detail Data User</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form action="<?=site_url('dashboard/edit_profile_action')?>" method="post">


                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Nama</label>
                                      <input type="text" class="form-control" name="nama" required value="<?=$applicant->applicant_name?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>NIK</label>
                                      <input type="text" class="form-control" name="nik" required value="<?=$applicant->nik?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" class="form-control" name="email" required value="<?=$applicant->email?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat-lahir" required value="<?=$applicant->place_of_birth?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                             
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input type="date" class="form-control" name="tanggal-lahir" required value="<?=$applicant->date_of_birth?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Agama</label>
                                      <input type="text" class="form-control" name="agama" required value="<?=$applicant->religion?>">
                                  </div>
                              </div>

                          </div>
                          <div class="row">
                             
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Alamat</label>
                                      <input type="text" class="form-control" name="alamat" required value="<?=$applicant->address?>">
                                  </div>
                              </div>

                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Password</label>
                                      <small>* Jika tidak ingin mengganti password biarkan kosong</small>
                                      <input type="password" class="form-control" name="password">
                                  </div>
                              </div>

                          </div>


                          <button class="btn btn-primary" type="submit">Simpan</button>

                      </form>
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->