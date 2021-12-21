<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('etalase')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Pembelian Barang </h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h3>Pembelian Barang Dev's Store</h3>
            </div>
            <div class="card-body">
                <?php
                    $id_barang = [
                        'name' => 'id_barang',
                        'id' => 'id_barang',
                        'value' => $model->id,
                        'type' => 'hidden'
                    ];

                    $id_pembeli = [
                        'name' => 'id_pembeli',
                        'id' => 'id_pembeli',
                        'value' => session()->get('id'),
                        'type' => 'hidden'
                    ];
                    $jumlah = [
                        'name' => 'jumlah',
                        'id' => 'jumlah',
                        'value' => 1,
                        'min' => 1,
                        'class' => 'form-control',
                        'type' => 'number',
                        'max' => $model->stok,
                    ];
                    $total_harga = [
                        'name' => 'total_harga',
                        'id' => 'total_harga',
                        'value' => null,
                        'class' => 'form-control',
                        'readonly' => true,
                    ];
                    $ongkir = [
                        'name' => 'ongkir',
                        'id' => 'ongkir',
                        'value' => 20000,
                        'class' => 'form-control',
                        'readonly' => true,
                    ];
                    $alamat = [
                        'name' => 'alamat',
                        'id' => 'alamat',
                        'class' => 'form-control',
                        'value' => null,
                    ];

                    $submit = [
                        'name' => 'submit',
                        'id' => 'submit',
                        'type' => 'submit',
                        'value' => 'Beli',
                        'class' => 'btn btn-primary',
                    ];
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-fluid" src="<?= base_url('uploads/'.$model->gambar) ?>" />
                                    <h1 class="text-primary"><?= $model->nama ?></h1>
                                    <h4> Harga : <?= $model->harga ?></h4>
                                    <h4> Stok : <?= $model->stok ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <strong>Estimasi : <span id="estimasi"></span></strong>
                            <hr>
                            <?= form_open('Etalase/beli') ?>
                            <?= form_input($id_barang) ?>
                            <?= form_input($id_pembeli) ?>
                            <div class="form-group">
                                <?= form_label('Jumlah Pembelian', 'jumlah') ?>
                                <?= form_input($jumlah) ?>
                            </div>
                            <div class="form-group">

                                <?= form_label('Ongkir', 'ongkir') ?>
                                <?= form_input($ongkir) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Total Harga', 'total_harga') ?>
                                <?= form_input($total_harga) ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Alamat', 'alamat') ?>
                                <?= form_input($alamat) ?>
                            </div>
                            <div class="text-right">
                                <?= form_submit($submit) ?>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>


    <?= $this->section('script') ?>
    <script>
    $('document').ready(function() {
        var jumlah_pembelian = 1;
        var harga = <?= $model->harga ?>;
        var ongkir = 20000;
        $("#service").on('change', function() {
            var estimasi = $('option:selected', this).attr('etd');
            ongkir = parseInt($(this).val());
            $("#ongkir").val(ongkir);
            $("#estimasi").html(estimasi + " Hari");
            var total_harga = (jumlah_pembelian * harga) + ongkir;
            $("#total_harga").val(total_harga);
        });

        $("#jumlah").on("change", function() {
            jumlah_pembelian = $("#jumlah").val();
            var total_harga = (jumlah_pembelian * harga) + ongkir;
            $("#total_harga").val(total_harga);
        });
    });
    </script>
    <?= $this->endSection() ?>
</section>