<p>Saya yang bertanda tangan di bawah ini, Kepala Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali dengan ini menerangkan bahwa,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">NIK</td>
            <td>:</td>
            <td><?=ucfirst($detail_letter->nik)?></td>
        </tr>
        <tr>
            <td class="cell-head">Nama Lengkap</td>
            <td>:</td>
            <td><?=ucfirst($detail_letter->applicant_name) ?></td>
        </tr>
        <tr>
            <td class="cell-head">Jenis Kelamin</td>
            <td>:</td>
            <td>
                <?php if($detail_letter->gender == 1) { ?>
                    Laki - Laki
                <?php } else {?>
                    Perempuan
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td class="cell-head">Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->place_of_birth)?>, <?= date('d M Y', strtotime($detail_letter->date_of_birth))?></td>
        </tr>
        <tr>
            <td class="cell-head">Agama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->religion)?></td>
        </tr>
        <tr>
            <td class="cell-head">Pekerjaan</td>
            <td>:</td>
            <td><?=ucfirst($detail_letter->jobs)?></td>
        </tr>
        <tr>
            <td class="cell-head">Alamat</td>
            <td>:</td>
            <td><?=$detail_letter->address?></td>
        </tr>
    </table>
</div>
<p class="mt-3">Nama yang tertera di atas adalah benar warga Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali yang dengan keterangan ini digunakan untuk melengkapi persyaratan nikah.</p>

<p class="mt-3">
Demikian surat pengantar nikah ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya secara bertanggung jawab.

</p>
