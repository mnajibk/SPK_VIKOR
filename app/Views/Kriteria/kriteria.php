<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('kriteria'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>Tabel Data Kriteria</h1>
            <a href="/ubah_kriteria">ubah</a>

            <div class="mt-3">
                <table id="" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th>Bobot</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($kriteria as $C) : ?>
                        <tr>
                            <td><?= $C['kode_kriteria']; ?></td>
                            <td><?= $C['nama_kriteria']; ?></td>
                            <td><?= $C['bobot']; ?></td>
                           
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>
