  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>History Pengajuan Surat</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?= site_url('Dashboard/user') ?>">Home</a></li>
                          <li class="breadcrumb-item active">History Surat</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Data Pengajuan Surat</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Tipe Pengajuan Surat</th>
                                          <th>Tanggal Pengajuan</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $x = 1 ?>
                                      <?php foreach ($letters as $item) : ?>
                                          <tr>
                                              <td><?= $item->id ?></td>
                                              <td><?= ucfirst($item->request_type) ?></td>
                                              <td><?= date('d M Y', strtotime($item->request_date)) ?></td>
                                              <td><?php

                                                    switch ($item->request_status) {
                                                        case 1:
                                                            echo '<span class="badge badge-primary">Diajukan</span>';
                                                            break;
                                                        case 2:
                                                            echo '<span class="badge badge-warning">Diproses</span>';
                                                            break;
                                                        case 3:
                                                            echo '<span class="badge badge-danger">Ditolak</span>';
                                                            break;
                                                        case 4:
                                                            echo '<span class="badge badge-success">Selesai</span>';
                                                            break;
                                                        default:
                                                            echo '<span class="badge badge-info">Unknown</span>';
                                                    }

                                                    ?>
                                                    <?php if ($item->request_status == 3) : ?>
                                                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-request-<?= $item->id ?>"> <i class="fas fa-info-circle"></i></button>

                                                    <div class="modal fade" id="modal-request-<?= $item->id ?>">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Alasan Ditolak</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                               
                                                                    <div class="modal-body">

                                                                       <?=$item->noted?>

                                                                    </div>
                                                               
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                <?php endif ?>
                                                </td>
                                              <td>
                                                  <a href="<?= site_url('dashboard/detail_letter/' . $item->request_type . '/' . $item->id) ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>

                                                  <?php if ($item->request_status == 4) : ?>
                                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-request-<?=$item->id?>"> <i class="fas fa-file-pdf"></i></button>

                                                      <div class="modal fade" id="modal-request-<?=$item->id?>">
                                                          <div class="modal-dialog modal-dialog-centered">
                                                              <div class="modal-content">
                                                                  <div class="modal-header">
                                                                      <h4 class="modal-title">Pengajuan Dokumen Fisik</h4>
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                  </div>
                                                                  <form action="<?= site_url('dashboard/action_letter_doc') ?>" method="post">
                                                                      <div class="modal-body">

                                                                          <div class="mb-3">
                                                                              <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                                                                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="alamat"></textarea>
                                                                          </div>

                                                                          <div class="mb-3">
                                                                              <label for="exampleFormControlTextarea1" class="form-label">No. Whatsapp</label>
                                                                              <input type="hidden" name="applicant_id" value="<?= $this->session->userdata('id') ?>">
                                                                              <input type="hidden" name="letter_id" value="<?= $item->id ?>">
                                                                              <input type="text" class="form-control" id="exampleFormControlTextarea1" required name="wa"></input>
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
                                                  <?php endif ?>
                                              </td>
                                          </tr>
                                      <?php endforeach ?>
                                  </tbody>

                              </table>
                          </div>
                          <!-- /.card-body -->
                      </div>

                  </div>
                  <!-- /.col -->
              </div>
              <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->