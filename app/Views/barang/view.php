<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('barang')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>View Data </h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h3>View Data Barang Dev's Store</h3>
            </div>

            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid" alt="image"
                                        src="<?= base_url('uploads/'.$barang->gambar) ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h1 class="text-primary"><?= $barang->nama ?></h1>
                            <h3>Category : <?= $barang->jenis ?></h4>
                                <h4>Harga : <?= $barang->harga ?></h4>
                                <h4>Stok : <?= $barang->stok ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection() ?>
</section>