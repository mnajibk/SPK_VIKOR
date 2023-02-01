<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('alternatif'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <h1>Edit Data Alternatif</h1>
    <div class="mt-5 col-12">

        <form action="/update_alternatif/<?= $alternatif['id_alternatif']; ?>" class="" method="POST">
            <input type="hidden" name="slug" value="<?= $alternatif['slug']; ?>">
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                        class="form-control <?= ($validation->hasError('kode_alternatif')) ? 'is-invalid' : ''; ?>"
                        id="kode_alternatif" name="kode_alternatif"
                        value="<?= (old('kode_alternatif')) ? old('kode_alternatif') : $alternatif['kode_alternatif'] ?>"
                        placeholder="Ai">
                    <div class="text-danger">
                        <?= $validation->getError('kode_alternatif'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                </div>
                <div class="col-sm-5">
                    <input type="text"
                        class="form-control <?= ($validation->hasError('nama_alternatif')) ? 'is-invalid' : ''; ?>"
                        id="nama_alternatif" name="nama_alternatif"
                        value="<?= (old('nama_alternatif')) ? old('nama_alternatif') : $alternatif['nama_alternatif'] ?>"
                        placeholder="Masukkan Nama Siswa">
                    <div class="text-danger">
                        <?= $validation->getError('nama_alternatif'); ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="kelas" class="form-label">Kelas</label>
                </div>
                <div class="col-sm-5">
                    <select class="form-select" name="kelas"
                        value="<?= (old('kelas')) ? old('kelas') : $alternatif['kelas'] ?>"
                        aria-label="Default select example">
                        <option value="8A" <?php if ($alternatif['kelas'] == '8A') echo 'selected' ?>>8A</option>
                        <option value="8B" <?php if ($alternatif['kelas'] == '8B') echo 'selected' ?>>8B</option>
                        <option value="8C" <?php if ($alternatif['kelas'] == '8C') echo 'selected' ?>>8C</option>
                    </select>
                </div>
            </div>

            <a href="/alternatif">
                <button type="button" class="btn btn-danger offset-2">Batal</button>
            </a>
            <button type="submit" class="btn btn-success">Simpan</button>

        </form>
    </div>
</div>


<?= $this->endSection(); ?>