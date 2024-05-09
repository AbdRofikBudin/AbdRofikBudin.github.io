<p>Saya yang bertanda tangan di bawah ini, Kepala Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali dengan ini menerangkan bahwa,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">Nama Kegiatan</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->event_name)?></td>
        </tr>
        <tr>
            <td class="cell-head">Tempat Kegiatan</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->event_location)?></td>
        </tr>
        <tr>
            <td class="cell-head">Tanggal Kegiatan</td>
            <td>:</td>
            <td><?= date('d M Y', strtotime($detail_letter->event_date))?></td>
        </tr>
        <tr>
            <td class="cell-head">Lama Hari</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->event_duration)?> Hari</td>
        </tr>
        <tr>
            <td class="cell-head">Durasi Jam Kegiatan</td>
            <td>:</td>
            <td>
                <?php 
                    $waktuStart = strtotime($detail_letter->event_start);
                    $waktuAkhir = strtotime($detail_letter->event_end);

                    $perbedaan = abs($waktuAkhir - $waktuStart);

                    $jam = $perbedaan / (60*60);

                    echo intval($jam)." Jam";
                ?>
            </td>
        </tr>
        <tr>
            <td class="cell-head">NIK Penanggung Jawab</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->nik)?></td>
        </tr>
        <tr>
            <td class="cell-head">Nama Penanggung Jawab</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->applicant_name)?></td>
        </tr>
    </table>
</div>
<p class="mt-3">Bahwa kegiatan tersebut <span class="fw-bold">DIIZINKAN</span> dengan tetap memperhatikan peraturan yang sudah ditetapkan Pemerintah Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali.</p>

<p class="mt-3">
    Demikian surat izin kegiatan ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya secara bertanggung jawab.

</p>