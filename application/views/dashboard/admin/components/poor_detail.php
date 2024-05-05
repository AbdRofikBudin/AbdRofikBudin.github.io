  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Detail Management Permohonan Surat</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= site_url('adminpanel') ?>">Home</a></li>
                          <li class="breadcrumb-item">Management Permohonan Surat</li>
                          <li class="breadcrumb-item active">Detail Management Permohonan Surat</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- general form elements disabled -->
              <div class="card card-warning">
                  <div class="card-header">
                      <h3 class="card-title">Detail Data Kurang Mampu</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
               
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>NIK Pemohon</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->nik_applicant ?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Nama Pemohon</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->applicant_name ?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Alamat Pemohon</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->address ?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Pekerjaan Pemohon</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->jobs ?>">
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Tujuan Pengajuan Surat</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->description ?>">
                                  </div>
                              </div>

                          </div>

                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Lampiran KTP</label>
                                      <div id="MainImages">
                                          <img src="<?= base_url('assets/letter_request/img/' . $letter->att_ktp) ?>" alt="ktp" class="ktp" width="500" />
                                      </div>
                                      <div id="Fullscreen" style="display: none; z-index: 999;">
                                          <img src="" alt="" />
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Lampiran KK</label>
                                      <div id="MainImagesKK">
                                          <img src="<?= base_url('assets/letter_request/img/' . $letter->att_kk) ?>" alt="kk" class="kk" width="500" />
                                      </div>
                                      <div id="FullscreenKK" style="display: none;">
                                          <img src="" alt="" />
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <?php if ($letter->request_status != 3 && $letter->request_status != 4) : ?>
                              <div class="container d-flex justify-content-center p-2">
                                  <a href="<?= site_url('adminpanel/change_to_success/' . $letter->id_letter) ?>" class="btn btn-success mx-2" onclick="return confirm('Apakah Kamu Yakin Mengubah Status Menjadi Selesai ?')"> <i class="fas fa-check-circle"></i>Terima</a>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default"> <i class="fas fa-ban"></i>Tolak</button>
                              </div>
                          <?php endif ?>

                          <div class="modal fade" id="modal-default">
                              <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h4 class="modal-title">Tolak Surat ?</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <form action="<?= site_url('adminpanel/change_to_reject/' . $letter->id_letter) ?>" method="post">
                                          <div class="modal-body">

                                              <div class="mb-3">
                                                  <label for="exampleFormControlTextarea1" class="form-label">Masukan Alasan Penolakan</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="noted"></textarea>
                                              </div>

                                          </div>
                                          <div class="modal-footer justify-content-between">
                                              <button type="submit" class="btn btn-primary">Simpan</button>
                                          </div>
                                      </form>
                                  </div>
                                  <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                  
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->