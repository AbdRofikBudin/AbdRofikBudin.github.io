  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Statistik Permohonan Surat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('adminpanel')?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Statistik Permohonan Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="row">
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Ket. Kematian</h5>
                <h1 class=""><?=$died['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$died['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$died['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$died['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$died['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Ket. Lahir</h5>
                <h1 class=""><?=$birth['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$birth['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$birth['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$birth['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$birth['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Perpindahan</h5>
                <h1 class=""><?=$moving['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$moving['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$moving['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$moving['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$moving['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Ket. Datang</h5>
                <h1 class=""><?=$coming['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$coming['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$coming['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$coming['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$coming['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Ket. Usaha</h5>
                <h1 class=""><?=$business['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$business['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$business['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$business['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$business['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Ket. Tidak Mampu</h5>
                <h1 class=""><?=$poor['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$poor['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$poor['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$poor['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$poor['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Pengantar Nikah</h5>
                <h1 class=""><?=$married['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$married['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$married['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$married['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$married['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-md-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="container text-center p-3">
                <h5 class="">Surat Izin Kegiatan</h5>
                <h1 class=""><?=$event['total_letters']?></h1>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <p class="nav-link">
                      Diajukan <span class="float-right badge bg-info"><?=$event['filed']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Diproses <span class="float-right badge bg-info"><?=$event['process']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Ditolak <span class="float-right badge bg-info"><?=$event['reject']?></span>
                    </p>
                  </li>
                  <li class="nav-item">
                    <p class="nav-link">
                      Selesai <span class="float-right badge bg-info"><?=$event['success']?></span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->