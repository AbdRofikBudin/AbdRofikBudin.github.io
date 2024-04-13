<div class="container">
    <h3 class="fw-semibold">Data Kegiatan</h3>
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Nama Kegiatan *</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama-kegiatan" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Tempat Kegiatan *</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tempat-kegiatan" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Lama Pelaksanaan Kegiatan (hari) *</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lama-kegiatan" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Tanggal Pelaksanaan *</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal-kegiatan" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Waktu Pelaksanaan Kegiatan *</label>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="waktu-mulai-kegiatan" required>
                    </div>
                    <div class="col-auto fw-bold">-</div>
                    <div class="col-lg-3">
                        <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="waktu-akhir-kegiatan" required>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container">
    <h3 class="fw-semibold">Dokumen Kelengkapan</h3>
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="mb-5">
                <label for="exampleInputEmail1" class="form-label">Scan KTP Penanggung Jawab *</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ktp" required accept="application/pdf, image/*">
            </div>
        </div>
    </div>