<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('kriteria'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <h1>Tambah Data Kriteria</h1>
    <div class="mt-5 col-12">

        <form action="/save_kriteria" class="" method="POST">
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                        class="form-control <?= ($validation->hasError('kode_kriteria')) ? 'is-invalid' : ''; ?>"
                        id="kode_kriteria" name="kode_kriteria" value="<?= old('kode_kriteria') ?>" placeholder="Ci">
                    <div class="text-danger">
                        <?= $validation->getError('nama_kriteria'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="nama_siswa" class="form-label">Nama Kriteria</label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                        class="form-control <?= ($validation->hasError('kode_kriteria')) ? 'is-invalid' : ''; ?>"
                        id="nama_siswa" name="nama_kriteria" value="<?= old('kode_kriteria') ?>"
                        placeholder="Masukkan Nama Kriteria">
                    <div class="text-danger">
                        <?= $validation->getError('nama_kriteria'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="kelas"
                        class="form-label <?= ($validation->hasError('kode_kriteria')) ? 'is-invalid' : ''; ?>">Bobot</label>
                </div>
                <div class="col-sm-5">
                    <input type="number" min="0" max="1" step="0.01" class="form-control" id="kode_kriteria"
                        name="bobot" value="<?= old('kode_kriteria') ?>" placeholder="0.0">
                    <div class="text-danger">
                        <?= $validation->getError('nama_kriteria'); ?>
                    </div>
                </div>
            </div>

            <a href="kriteria">
                <button type="button" class="btn btn-danger offset-2">Batal</button>
            </a>
            <button type="submit" class="btn btn-success">Tambah</button>

        </form>
    </div>
</div>


<?= $this->endSection(); ?>