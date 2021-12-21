<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('etalase') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>View Barang Beli</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Transaksi No <?= $transaksi->id_trans ?></h4>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-md">
                <tbody>
                    <tr>
                        <td>Barang</td>
                        <td><?= $transaksi->nama ?></td>
                    </tr>
                    <tr>
                        <td>Pembeli</td>
                        <td><?= $transaksi->username ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?= $transaksi->alamat ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><?= $transaksi->jumlah ?></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td><?= $transaksi->total_harga ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection() ?>