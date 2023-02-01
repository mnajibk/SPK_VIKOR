<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('penilaian'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1>Input Penilaian</h1>
            <div class="mt-3 col-12">

                <form action="/save_penilaian/<?= $alternatif['id_alternatif']; ?>" class="" method="POST">
                    <input type="hidden" name="slug" value="<?= $alternatif['slug']; ?>">
                    <div class="mb-3 col-6">
                        <label for="kode_alternatif" class="form-label">Kode Alternatif</label>
                        <input type="text" class="form-control" id="kode_alternatif"
                            value="<?= (old('kode_alternatif')) ? old('kode_alternatif') : $alternatif['kode_alternatif'] ?>"
                            placeholder="Kode Alternatif" readonly>
                            <div class="text-danger">
                                <?= $validation->getError('kode_alternatif'); ?>
                            </div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nama_alternatif" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_alternatif" nama="nama_alternatif"
                            value="<?= (old('nama_alternatif')) ? old('nama_alternatif') : $alternatif['nama_alternatif'] ?>"
                            placeholder="Nama Alternatif" readonly>
                            <div class="text-danger">
                                <?= $validation->getError('nama_alternatif'); ?>
                            </div>
                    </div>

                    <div class="mb-3 col-2">
                        <label for="nilai_raport" class="form-label">Nilai Raport</label>
                        <input type="text" class="form-control" id="nilai_raport" nilai="nilai_raport"
                            value="<?= (old('nilai_raport')) ? old('nilai_raport') : $alternatif['nilai_raport'] ?>"
                            placeholder="nilai raport">
                            <div class="text-danger">
                                <?= $validation->getError('nilai_raport'); ?>
                            </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-sm-2">
                            <label for="nilai_ekstrakulikuler" class="form-label">Nilai Ekstrakulikuler</label>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-select" name="nilai_ekstrakulikuler" value="<?= (old('nilai_ekstrakulikuler')) ? old('nilai_ekstrakulikuler') : 
                                $alternatif['nilai_ekstrakulikuler'] ?>"
                                aria-label="Default select example">
                                <option selected>--</option>
                                <option value="4" <?php if ($alternatif['nilai_ekstrakulikuler'] == '4') echo 'selected' ?>>Sangat Baik</option>
                                <option value="3" <?php if ($alternatif['nilai_ekstrakulikuler'] == '3') echo 'selected' ?>>Baik</option>
                                <option value="2" <?php if ($alternatif['nilai_ekstrakulikuler'] == '2') echo 'selected' ?>>Cukup</option>
                                <option value="1" <?php if ($alternatif['nilai_ekstrakulikuler'] == '1') echo 'selected' ?>>Buruk</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 col-2">
                        <label for="nilai_prestasi" class="form-label">Nilai Prestasi</label>
                        <input type="text" class="form-control" id="nilai_prestasi" nilai="nilai_prestasi"
                            value="<?= (old('nilai_prestasi')) ? old('nilai_prestasi') : $alternatif['nilai_prestasi'] ?>"
                            placeholder="nilai prestasi">
                            <div class="text-danger">
                                <?= $validation->getError('nilai_prestasi'); ?>
                            </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-sm-2">
                            <label for="nilai_sikap" class="form-label">Nilai Sikap</label>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-select" name="nilai_sikap"
                                value="<?= (old('nilai_sikap')) ? old('nilai_sikap') : $alternatif['nilai_sikap'] ?>"
                                aria-label="Default select example">
                                <option selected>--</option>
                                <option value="4" <?php if ($alternatif['nilai_sikap'] == '4') echo 'selected' ?>>Sangat Baik</option>
                                <option value="3" <?php if ($alternatif['nilai_sikap'] == '3') echo 'selected' ?>>Baik</option>
                                <option value="2" <?php if ($alternatif['nilai_sikap'] == '2') echo 'selected' ?>>Cukup</option>
                                <option value="1" <?php if ($alternatif['nilai_sikap'] == '1') echo 'selected' ?>>Buruk</option>
                            </select>
                        </div>
                    </div>

                    



                   
                    <div class="mt-4">
                        <a href="/penilaian">
                            <button type="button" class="btn btn-danger">Batal</button>
                        </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>