<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Riwayat Pengajuan Dokumen Fisik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('dashboard/user') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Riwayat Pengajuan Dokumen Fisik</li>
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
                            <h3 class="card-title">Data Riwayat Pengajuan Dokumen Fisik</h3>
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