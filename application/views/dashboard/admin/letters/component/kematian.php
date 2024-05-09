<p>Saya yang bertanda tangan di bawah ini, Kepala Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali dengan ini menerangkan bahwa,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">NIK</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->died_nik) ?></td>
        </tr>
        <tr>
            <td class="cell-head">Nama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->name) ?></td>
        </tr>
        <tr>
            <td class="cell-head">Jenis Kelamin</td>
            <td>:</td>
            <td> <?php if ($detail_letter->gender == 1) { ?>
                    Laki - Laki
                <?php } else { ?>
                    Perempuan
                <?php } ?>
            </td>
        </tr>
        <tr>
        <?php
             $nama_bulan_indonesia = array(
                'January' => 'Januari',
                'February' => 'Februari',
                'March' => 'Maret',
                'April' => 'April',
                'May' => 'Mei',
                'June' => 'Juni',
                'July' => 'Juli',
                'August' => 'Agustus',
                'September' => 'September',
                'October' => 'Oktober',
                'November' => 'November',
                'December' => 'Desember'
            );
                  $day = date('d', strtotime($detail_letter->birth_date));
                  $month = date('F', strtotime($detail_letter->birth_date));
                  $year = date('Y', strtotime($detail_letter->birth_date));
            ?>
            <td class="cell-head">Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->birth_place) ?>, <?= $day." ".$nama_bulan_indonesia[$month]." ".$year ?></td>
        </tr>
        <tr>
            <td class="cell-head">Umur</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->last_age) ?> Tahun</td>
        </tr>
        <tr>
            <td class="cell-head">Agama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->died_religion) ?></td>
        </tr>

    </table>
</div>
<p class="mt-3">Telah meninggal dunia pada,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
        <?php
           
                  $day = date('d', strtotime($detail_letter->died_date));
                  $month = date('F', strtotime($detail_letter->died_date));
                  $year = date('Y', strtotime($detail_letter->died_date));
            ?>

            <?php
            $nama_hari_indonesia = array(
                'Sunday' => 'Minggu',
                'Monday' => 'Senin',
                'Tuesday' => 'Selasa',
                'Wednesday' => 'Rabu',
                'Thursday' => 'Kamis',
                'Friday' => 'Jumat',
                'Saturday' => 'Sabtu'
            );

            $date = $detail_letter->died_date;
            $hari = date('l', strtotime($date));
            ?>
            <td class="cell-head">Hari, Tanggal</td>
            <td>:</td>
            <td><?= $nama_hari_indonesia[$hari] ?>, <?= $day." ".$nama_bulan_indonesia[$month]." ".$year ?></td>
        </tr>
        <tr>
            <td class="cell-head">Bertempat di</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->died_last_loc) ?></td>
        </tr>
    </table>
</div>
<p class="mt-3">Surat keterangan ini dibuat berdasarkan keterangan pelapor,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">NIK</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->nik) ?></td>
        </tr>
        <tr>
            <td class="cell-head">Nama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->applicant_name) ?></td>
        </tr>
        <tr>
            <td class="cell-head">Jenis Kelamin</td>
            <td>:</td>
            <td>
                <?php if ($detail_letter->gender == 1) { ?>
                    Laki - Laki
                <?php } else { ?>
                    Perempuan
                <?php } ?>
            </td>
        </tr>
        <tr>
        <?php
                  $day = date('d', strtotime($detail_letter->date_of_birth));
                  $month = date('F', strtotime($detail_letter->date_of_birth));
                  $year = date('Y', strtotime($detail_letter->date_of_birth));
            ?>
            <td class="cell-head">Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->place_of_birth) ?>, <?= $day." ".$nama_bulan_indonesia[$month]." ".$year ?></td>
        </tr>
        <tr>
            <td class="cell-head">Agama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->religion) ?></td>
        </tr>
        <tr>
            <td class="cell-head">Alamat</td>
            <td>:</td>
            <td><?=ucfirst($detail_letter->address) ?></td>
            </td>
        </tr>
    </table>
</div>
<p class="mt-3">Demikian surat keterangan kematian ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya secara bertanggung jawab.</p>