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
                      <h3 class="card-title">Detail Data Usaha</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <form>
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Nama Usaha</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->business_name ?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Alamat Usaha</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->business_address ?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Kategori/Bidang Usaha</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->business_category ?>">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label>Nama Pemilik Usaha</label>
                                      <input type="text" class="form-control" disabled value="<?= $letter->owner_name ?>">
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col-sm-6">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label>Lampiran KTP Pemilik Usaha</label>
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
                                      <label>Lampiran Dokumen Usaha</label>
                                      <div id="MainImagesKK">
                                          <img src="<?= base_url('assets/letter_request/img/' . $letter->att_business_doc) ?>" alt="usaha" class="usaha" width="500" />
                                      </div>
                                      <div id="FullscreenUsaha" style="display: none;">
                                          <img src="" alt="" />
                                      </div>
                                  </div>
                              </div>
                          </div>

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