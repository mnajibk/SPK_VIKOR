<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('alternatif'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1>Tambah Data Alternatif</h1>
            <div class="mt-5 col-12">

                <form action="/save_alternatif" class="" method="POST">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <div class="col-sm-2">
                            <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('kode_alternatif')) ? 'is-invalid' : ''; ?>"
                                value="<?= old('kode_alternatif') ?>" id="kode" name="kode_alternatif" placeholder="Ai">
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
                                value="<?= old('nama_alternatif') ?>" id="nama" name="nama_alternatif"
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
                            <select class="form-select <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>"
                                value="<?= old('kelas') ?>" name="kelas" aria-label="Default select example">
                                <option value="">-pilih kelas-</option>
                                <option value="8A">8A</option>
                                <option value="8B">8B</option>
                                <option value="8C">8C</option>
                            </select>
                            <div class="text-danger">
                                <?= $validation->getError('kelas'); ?>
                            </div>
                        </div>
                    </div>

                    <a href="alternatif">
                        <button type="button" class="btn btn-danger offset-2">Batal</button>
                    </a>
                    <button type="submit" class="btn btn-success">Tambah</button>

                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>