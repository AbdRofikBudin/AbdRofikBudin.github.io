<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Management Data Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= site_url('adminpanel') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Management Data Admin</li>
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
                            <h3 class="card-title">Data Admin</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Tambah Admin</button>
                            <div class="modal fade" id="modal-add">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Data Admin</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= site_url('adminpanel/add_admin') ?>" method="post">
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Nama Admin</label>
                                                    <input class="form-control" type="text" required name="nama-admin">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Email Admin</label>
                                                    <input class="form-control" type="email" required name="email-admin">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Username Admin</label>
                                                    <input class="form-control" type="text" required name="username-admin">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Password Admin</label>
                                                    <input class="form-control" type="password" required name="password-admin">
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
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Admin</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1 ?>
                                    <?php foreach ($admin as $item) : ?>
                                        <tr>
                                            <td><?= $x++ ?></td>
                                            <td><?= $item->admin_name ?></td>
                                            <td>
                                                <?= $item->email ?>
                                            </td>
                                            <td><?= $item->username ?></td>
                                            <td>


                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit-<?= $item->id ?>"><i class="fas fa-edit"></i></button>
                                                <a href="<?= site_url('adminpanel/delete_admin/' . $item->id) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>

                                                <div class="modal fade" id="modal-edit-<?= $item->id ?>">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Data <?= $item->admin_name ?></h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="<?= site_url('adminpanel/edit_admin/' . $item->id) ?>" method="post">
                                                                <div class="modal-body">

                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Nama Admin</label>
                                                                        <input class="form-control" type="text" required name="nama-admin" value="<?= $item->admin_name ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Email Admin</label>
                                                                        <input class="form-control" type="email" required name="email-admin" value="<?= $item->email ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Username Admin</label>
                                                                        <input class="form-control" type="text" required name="username-admin" value="<?= $item->username ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlTextarea1" class="form-label">Password Admin</label>
                                                                        <small>kosongkan password jika tidak ingin mengganti password</small>
                                                                        <input class="form-control" type="password" name="password-admin">
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