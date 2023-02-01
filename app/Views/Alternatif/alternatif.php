<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('alternatif'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h1>Tabel Data Alternatif</h1>
            <a href="/tambah_alternatif"><button type="button" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus"> </i> Tambah Data
                </button>
            </a>
            <div class="mt-3">
                <?php $no= 1 ?>
                <table id="example" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alternatif as $A) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $A['kode_alternatif']; ?></td>
                            <td><?= $A['nama_alternatif']; ?></td>
                            <td><?= $A['kelas']; ?></td>
                            <td>
                                <a href="/edit_alternatif/<?= $A['slug']; ?>" class="btn btn-warning">Edit
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="/delete_alternatif/<?= $A['id_alternatif']; ?>" method="POST"
                                    class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah anda yakin menghapus?')">Delete <i
                                            class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>