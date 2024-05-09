<p>Saya yang bertanda tangan di bawah ini, Kepala Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali dengan ini menerangkan bahwa,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">NIK</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->nik)?></td>
        </tr>
        <tr>
            <td class="cell-head">Nama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->applicant_name)?></td>
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
            <td class="cell-head">Alamat</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->address)?></td>
        </tr>
    </table>
</div>
<p class="mt-3">Telah lahir seorang anak <?= $detail_letter->baby_gender == 1 ? "Laki - Laki" : "Perempuan" ?>,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">Nama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->baby_name)?></td>
        </tr>
        <tr>
            <td class="cell-head">Agama</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->baby_religion)?></td>
        </tr>
    </table>
</div>
<p class="mt-3">Anak ke-<?=$detail_letter->child_order?> dari orang tua,</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">Nama Ibu Kandung</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->mother_name)?></td>
        </tr>
        <tr>
            <td class="cell-head">NIK Ibu Kandung</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->mother_nik)?></td>
        </tr>
        <tr>
            <td class="cell-head">Nama Ayah Kandung</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->father_name)?></td>
        </tr>
        <tr>
            <td class="cell-head">NIK Ayah Kandung</td>
            <td>:</td>
            <td><?= ucfirst($detail_letter->father_nik)?></td>
        </tr>
    </table>
</div>
<p class="mt-3">
Demikian surat keterangan kelahiran ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya secara bertanggung jawab.

</p>
