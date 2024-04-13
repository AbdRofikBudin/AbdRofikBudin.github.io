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
                                          <!-- <th>Action</th> -->
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $x = 1 ?>
                                      <?php foreach ($letters as $item) : ?>
                                          <tr>
                                              <td><?= $x++ ?></td>
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

                                                    ?></td>
                                              <!-- <td>
                                                  <a href="#" class="btn btn-primary">Lihat</a>
                                              </td> -->
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