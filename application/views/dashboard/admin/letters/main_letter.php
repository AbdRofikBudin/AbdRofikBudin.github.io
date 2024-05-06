<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan {{}}</title>
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
                    Dusun III, Desa Lafeu, Kecamatan Bungku Pesisir, Kabupaten Morowali
                </p>

            </div>
        </div>
        <hr class="mx-5" style="margin-top: -3pt">
        <div class="container-fluid mt-4 px-5">
            <div class="container">
                <h2 class="text-center fs-6 fw-bold text-decoration-underline">SURAT KETERANGAN {{}}</h2>
                <p class="text-center">Nomor : {{id surat}}</p>
            </div>
            <?=$contents?>
            <p class="text-end pe-4">
                Lafeu, <?= date('d M Y')?>
                <br>
                Kepala Desa Lafeu
            </p>
            <p class="text-end pe-4 mt-5">Arifin Laembo, S.E.</p>
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