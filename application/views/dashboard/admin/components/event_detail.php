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
                      <h3 class="card-title">Detail Data Izin Kegiatan</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form>
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Nama Kegiatan</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->event_name ?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Tempat Kegiatan</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->event_location?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Lama Pelaksanaan (hari)</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->event_duration ?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Tanggal Pelaksanaan</label>
                                      <input type="text" class="form-control" disabled value="<?= date('d M Y', strtotime($letter->event_date)) ?>">
                                  </div>
                              </div>
                             
                          </div>

                          <div class="row">
                        
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Lampiran KTP Penanggung Jawab</label>
                                      <div id="MainImages">
                                          <img src="<?= base_url('assets/letter_request/img/' . $letter->att_ktp) ?>" alt="ktp" class="ktp" width="500" />
                                      </div>
                                      <div id="Fullscreen" style="display: none; z-index: 999;">
                                          <img src="" alt="" />
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                          <?php if($letter->request_status != 3 && $letter->request_status != 4) :?>
                          <div class="container d-flex justify-content-center p-2">
                              <a href="<?= site_url('adminpanel/change_to_success/' . $letter->id_letter) ?>" class="btn btn-success mx-2" onclick="return confirm('Apakah Kamu Yakin Mengubah Status Menjadi Selesai ?')"> <i class="fas fa-check-circle"></i>Terima</a>
                              <a href="<?= site_url('adminpanel/change_to_reject/' . $letter->id_letter) ?>" class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin Mengubah Status Menjadi Ditolak ?')"> <i class="fas fa-ban"></i>Tolak</a>
                          </div>
                            <?php endif?>
                         

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