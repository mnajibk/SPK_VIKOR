<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('kriteria'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>Tabel Data Kriteria</h1>

            <div class="mt-3">
            <form action="/save_kriteria" class="" method="POST">
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
                            <input name="id_kriteria" type="hidden" value="<?= $C['id_kriteria']; ?>">
                            <input name="slug" type="hidden" value="<?= $C['slug']; ?>">
                            <td><input name="kode_kriteria" type="text" value="<?= $C['kode_kriteria']; ?>"></td>
                            <td><input name="nama_kriteria" type="text" value="<?= $C['nama_kriteria']; ?>"></td>
                            <td><input name="bobot" type="text" value="<?= $C['bobot']; ?>"></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
                <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>