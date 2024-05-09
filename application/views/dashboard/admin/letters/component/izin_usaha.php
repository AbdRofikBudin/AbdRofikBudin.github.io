<p>
Saya yang bertanda tangan di bawah ini, Kepala Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali dengan ini menerangkan bahwa,

</p>
<div class="container-fluid px-3">
    <table>
        <tr>
            <td class="cell-head">NIK</td>
            <td>:</td>
            <td><?=ucfirst($detail_letter->nik)?></td>
        </tr>
        <tr>
            <td class="cell-head">Nama</td>
            <td>:</td>
            <td><?=ucfirst($detail_letter->applicant_name)?></td>
        </tr>
        <tr>
            <td class="cell-head">Alamat</td>
            <td>:</td>
            <td><?=ucfirst($detail_letter->address)?></td>
        </tr>
    </table>
</div>
<p class="mt-3">
Nama yang tertera di atas adalah benar memiliki kegiatan usaha bernama <span class="fw-bold"><?=strtoupper($detail_letter->business_name)?></span> di bidang <span class="fw-bold"><?=strtoupper($detail_letter->business_category)?></span> yang berlokasi di <span class="fw-bold"><?=strtoupper($detail_letter->business_address)?></span>. 

</p>
<p class="mt-3">
Demikian surat keterangan usaha ini dibuat dengan sebenar-benarnya agar dapat dipergunakan sebagaimana mestinya secara bertanggung jawab.


</p>
