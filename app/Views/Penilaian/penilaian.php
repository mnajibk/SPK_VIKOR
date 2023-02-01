<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('penilaian'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Data Penilaian</h1>

    <div class="mt-3">
        <table id="example" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Alternatif</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alternatif as $a) : ?>
                <tr>
                    <td><?= $a['id_alternatif']; ?></td>
                    <td><?= $a['kode_alternatif']; ?></td>
                    <td><?= $a['nama_alternatif']; ?></td>
                    <td><?= $a['kelas']; ?></td>
                    <td><?= $a['nilai_raport']; ?></td>
                    <td><?= $a['nilai_ekstrakulikuler']; ?></td>
                    <td><?= $a['nilai_prestasi']; ?></td>
                    <td><?= $a['nilai_sikap']; ?></td>

                    <td>
                        <a href="/input_penilaian/<?= $a['kode_alternatif']; ?>" class="btn btn-primary"> <i
                                class="fa fa-edit"></i> Penilaian

                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $this->endSection(); ?>