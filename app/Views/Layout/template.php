<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK VIKOR</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="/bootstrap-5.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/fontawesome-6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css" />
    <link rel="icon" href="/logo.png" type="image/gif">

</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SPK VIKOR</a>
            <span class="navbar-brand">|</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= $this->renderSection('index'); ?>" aria-current="page" href="/">Home</a>
                    <a class="nav-link <?= $this->renderSection('alternatif'); ?>" href="/alternatif">Data
                        Alternatif</a>
                    <a class="nav-link <?= $this->renderSection('kriteria'); ?>" href="/kriteria">Kriteria</a>
                    <a class="nav-link <?= $this->renderSection('penilaian'); ?>" href="/penilaian">Penilaian</a>
                    <a class="nav-link <?= $this->renderSection('perhitungan'); ?>" href="/perhitungan">Perhitungan</a>
                    <a class="nav-link <?= $this->renderSection('hasil'); ?>" href="/hasil">Hasil</a>
                </div>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script> -->

    <script type="text/javascript" src="bootstrap-5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#feature').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function() {
        $('#normalisasi').DataTable();
    });

    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</body>

</html>