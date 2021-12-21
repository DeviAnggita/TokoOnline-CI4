<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('etalase')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Etalase Barang </h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h3>Data Barang Dev's Store</h3>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <?php foreach($model as $m): ?>
                        <div class="col-3">
                            <div class="card text-center">
                                <div class="card-header">
                                    <span class="text-primary"><strong><?= $m->nama ?></strong></span>
                                </div>
                                <div class="card-body">
                                    <img class="img-thumbnail" style="max-height: 200px"
                                        src="<?= base_url('uploads/'.$m->gambar) ?>" />
                                    <h5 class="mt-3 text-primary"><?= "Rp ".number_format($m->harga,2,',','.') ?></h5>
                                    <p class="text-info">Stok : <?= $m->stok ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?= site_url('etalase/beli/'.$m->id)?>" style="width:100%"
                                        class="btn btn-primary">Beli</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <?= $this->endSection() ?>
</section>