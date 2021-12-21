<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('transaksi') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Transaksi Barang</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Transaksi Barang Dev's Store</h4>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-striped table-md">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Pembeli</th>
                        <th>Alamat</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach($model as $index=>$transaksi): ?>
                    <tr>
                        <td><?= $transaksi->id ?></td>
                        <td><?= $transaksi->id_barang ?></td>
                        <td><?= $transaksi->id_pembeli ?></td>
                        <td><?= $transaksi->alamat ?></td>
                        <td><?= $transaksi->jumlah ?></td>
                        <td><?= $transaksi->total_harga ?></td>
                        <td>
                            <a href="<?= site_url('transaksi/view/'.$transaksi->id) ?>" class="btn btn-primary">
                                <i class="fas fa-eye"></i></a>
                            <a href="<?= site_url('transaksi/invoice/'.$transaksi->id) ?>" class="btn btn-info">
                                <i class="fas fa-print"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection() ?>