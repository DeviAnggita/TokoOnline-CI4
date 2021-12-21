<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Dev's Store</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Data Dev's Store</h4>
        </div>
        <div class="card-header">
            <div class="section-header-button">
                <a href="<?=site_url('barang/create')?>" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>

        <div class="container">
            <?php
        if (!empty(session()->getFlashdata('success'))) { ?>

            <div class="alert alert-success">
                <?php echo session()->getFlashdata('success'); ?>
            </div>

            <?php } ?>
            <?php if (!empty(session()->getFlashdata('info'))) { ?>

            <div class="alert alert-info">
                <?php echo session()->getFlashdata('info'); ?>
            </div>

            <?php } ?>

            <?php if (!empty(session()->getFlashdata('warning'))) { ?>

            <div class="alert alert-warning">
                <?php echo session()->getFlashdata('warning'); ?>
            </div>

            <?php } ?>
            <?php if (!empty(session()->getFlashdata('danger'))) { ?>

            <div class="alert alert-danger">
                <?php echo session()->getFlashdata('danger'); ?>
            </div>

            <?php } ?>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-md">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Barang</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>

                <tbody>
                    <?php foreach($barangs as $index=>$barang): ?>
                    <tr>
                        <td><?= ($index+1) ?></td>
                        <td><?= $barang->jenis ?></td>
                        <td><?= $barang->nama ?></td>
                        <td>
                            <img class="img-fluid" width="200px" alt="gambar"
                                src="<?= base_url('uploads/'.$barang->gambar) ?>" />
                        </td>
                        <td><?= $barang->harga ?></td>
                        <td><?= $barang->stok ?></td>
                        <td>
                            <a href="<?= site_url('barang/view/'.$barang->id) ?>" class="btn btn-primary">
                                <i class="fas fa-eye"></i></a>
                            <a href="<?= site_url('barang/update/'.$barang->id) ?>" class="btn btn-success"><i
                                    class="fas fa-edit"></i></a>
                            <a href="<?= site_url('barang/delete/'.$barang->id) ?>" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa <?= $barang->nama; ?>?')"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
$(document).ready(function() {
    $('#MyTable').DataTable();
});
</script>

<?= $this->endSection() ?>