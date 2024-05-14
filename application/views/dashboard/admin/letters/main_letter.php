<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Electronic</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Set page size to A4 */
        @page {
            size: A4;
            margin: 0;
        }

        /* Set content to be centered vertically and horizontally on A4 size page */
        html,
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 16px;
            /* or any size you prefer */
            height: 100%;
            width: 100%;
            /* display: flex;
            justify-content: center; */
            /* align-items: center; */
        }

        /* Additional styling for the letter */
        .letter {
            width: 100%;
            /* max-width: 600px; */
            /* Limiting maximum width for better readability */
            padding: 20px;
        }

        .cell-head {
            padding-right: 18px;
        }
    </style>
</head>

<body>
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
    $day = date('d');
    $month = date('F');
    $year = date('Y');
    $letter = "";
    switch ($detail_letter->request_type) {
        case "kelahiran":
            $letter = "SURAT KETERANG KELAHIRAN";
            $no = "N-";
            break;
        case "kematian":
            $letter = "SURAT KETERANG KEMATIAN";
            $no = "M-";
            break;
        case "usaha":
            $letter = "SURAT KETERANGAN USAHA";
            $no = "B-";
            break;
        case "kepindahan":
            $letter = "SURAT PENGANTAR PINDAH-DATANG ANTAR KABUPATEN/PROVINSI";
            $no = "A1-";
            break;
        case "kedatangan":
            $letter = "SURAT PENGANTAR PINDAH-DATANG ANTAR KABUPATEN/PROVINSI";
            $no = "A2-";
            break;
        case "izin-kegiatan":
            $letter = "SURAT IZIN KEGIATAN";
            $no = "E-";
            break;
        case "pengantar-nikah":
            $letter = "SURAT PENGANTAR NIKAH";
            $no = "MN-";
            break;
        case "kurang-mampu":
            $letter = "SURAT KETERANGAN TIDAK MAMPU";
            $no = "P-";
            break;
        default:
            redirect('adminpanel');
            break;
    } ?>
    <div class="letter mt-2">
        <div class="container d-flex justify-content-center gap-5">
            <img src="<?= base_url('assets/img/morowali.png') ?>" alt="logo" width="80" height="105" style="margin-left: -80pt;">
            <div class="heading-text p-0">
                <h1 class="fs-5 text-center">
                    PEMERINTAH KABUPATEN MOROWALI
                    <br>
                    KECAMATAN BUNGKU PESISIR
                </h1>
                <h2 class="text-center fw-bold fs-4">DESA LAFEU</h2>
                <p class="text-center" style="font-size: 12px;">
                Lr. Puskesmas Lafeu No.   Desa Lafeu Kode Pos 94981
                </p>

            </div>
        </div>
        <hr class="mx-5" style="margin-top: -3pt">
        <div class="container-fluid mt-4 px-5">
            <div class="container">
                <h2 class="text-center fs-6 fw-bold text-decoration-underline"><?=$letter?></h2>
                <p class="text-center">Nomor : <?=$detail_letter->no_letter?></p>
            </div>
            <?= $contents ?>
            <p class="text-end pe-3">
                Lafeu, <?= $day." ".$nama_bulan_indonesia[$month]." ".$year ?>
                <br>
                Kepala Desa Lafeu
            </p>
            <div class="container-fluid d-flex flex-row-reverse">
                <img src="<?=base_url('assets/img/tanda_tangan.jpeg')?>" alt="tanda_tangan" width="120" height="120" class="text-end">
            </div>
            <p class="text-end pe-4">Arifin Laembo, S.E.</p>
        </div>
    </div>


    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>