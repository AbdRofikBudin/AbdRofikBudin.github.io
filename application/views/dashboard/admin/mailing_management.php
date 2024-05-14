<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Management Permohonan Pengajuan Surat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('adminpanel') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Management Permohonan Pengajuan Surat</li>
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
                            <h3 class="card-title">Data Permohonan Pengajuan Surat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pemohon</th>
                                        <th>Jenis Permohonan</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Whatsapp</th>
                                        <th>Alamat Lengkap</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1 ?>
                                    <?php foreach ($letters as $item) : ?>
                                        <tr>
                                            <td><?= $x++ ?></td>
                                            <td><?= $item->applicant_name ?></td>
                                            <td>
                                                <?php

                                                switch ($item->request_type) {
                                                    case "kelahiran":
                                                        echo "Surat Keterangan Lahir";
                                                        break;
                                                    case "kematian":
                                                        echo "Surat Keterangan Kematian";
                                                        break;
                                                    case "usaha":
                                                        echo "Surat Keterangan Usaha";
                                                        break;
                                                    case "izin-kegiatan":
                                                        echo "Surat Izin Kegiatan";
                                                        break;
                                                    case "kepindahan":
                                                        echo "Surat Perpindahan";
                                                        break;
                                                    case "kedatangan":
                                                        echo "Surat Keterangan Datang";
                                                        break;
                                                    case "kurang-mampu":
                                                        echo "Surat Keterangan Tidak Mampu";
                                                        break;
                                                    case "pengantar-nikah":
                                                        echo "Surat Pengantar Nikah";
                                                        break;
                                                    default:
                                                        echo "Unknown";
                                                }

                                                ?>
                                            </td>
                                            <td><?= date('d M Y', strtotime($item->submission_date)) ?></td>
                                            <td><?= $item->wa ?></td>
                                            <td>
                                                <?= $item->full_address ?></td>
                                            </td>
                                            <td><?php

                                                switch ($item->status) {
                                                    case 1:
                                                        echo '<span class="badge badge-primary">Diajukan</span>';
                                                        break;
                                                    case 2:
                                                        echo '<span class="badge badge-warning">Diproses</span>';
                                                        break;
                                                    case 3:
                                                        echo '<span class="badge badge-info">Dikirim</span>';
                                                        break;
                                                    case 4:
                                                        echo '<span class="badge badge-success">Selesai</span>';
                                                        break;
                                                    default:
                                                        echo '<span class="badge badge-info">Unknown</span>';
                                                }

                                                ?></td>
                                            <td>
                                                <?php if ($item->status == 1) : ?>
                                                    <a href="<?= site_url('adminpanel/change_letter_to_process/' . $item->id_submission) ?>" class="btn btn-warning"><i class="fas fa-user-check"></i></a>
                                                <?php endif ?>

                                                <?php if ($item->status == 2) : ?>
                                                    <a href="<?= site_url('adminpanel/change_letter_to_send/' . $item->id_submission) ?>" class="btn btn-primary"><i class="far fa-paper-plane"></i></a>
                                                    <a href="<?= site_url('adminpanel/electronic_letter/' . $item->request_type . '/' . $item->id_submission) ?>" class="btn btn-danger my-1"><i class="fas fa-print"></i></a>
                                                <?php endif ?>

                                                <?php if ($item->status == 3) : ?>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-attach"><i class="fas fa-check"></i></button>
                                                    <a href="<?= site_url('adminpanel/electronic_letter/' . $item->request_type . '/' . $item->id_submission) ?>" class="btn btn-danger my-1"><i class="fas fa-print"></i></a>

                                                    <div class="modal fade" id="modal-attach">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Lampiran Surat</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="<?= site_url('adminpanel/change_letter_to_done/' . $item->id_submission) ?>" method="post" enctype="multipart/form-data">
                                                                    <div class="modal-body">

                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlTextarea1" class="form-label">Import File Dokumen PDF *</label>
                                                                            <input class="form-control" type="file" id="formFile" required name="pdf" accept="application/pdf">
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

                                                <?php if ($item->status == 4) : ?>
                                                    <a href="<?= site_url('adminpanel/electronic_letter/' . $item->request_type . '/' . $item->id_submission) ?>" class="btn btn-danger my-1"><i class="fas fa-print"></i></a>
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