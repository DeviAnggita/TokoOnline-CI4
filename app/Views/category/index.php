<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<div class="card-body">
    <div class="container-fluid mt--6">
        <!-- Card stats -->
        <div class="row">
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">List Category</h3>
                            </div>
                            <div class="col text-right">
                                <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#tambahModal">Tambah Kategori</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jenis Barang</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($jenis as $j) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $j['jenisbarang']; ?></td>
                                    <td>
                                        <a onclick="return confirm('Apakah anda yakin menghapus ?')"
                                            href="/category/delete/<?= $j['id_jenis']; ?>" id="hapus"
                                            class="badge badge-danger" data-toggle="tooltip"
                                            data-original-title="Edit user">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Jenis Modal-->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('Category/simpan'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <input type="text" id="jenisbarang" name="jenisbarang" class="form-control"
                                placeholder="Jenis barang">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-left: 2%;" type="submit" class="btn btn-primary mb-3"
                            name="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Jenis Modal-->
    <?php $no = 0; foreach ($jenis as $j) : $no++; ?>
    <div class="modal fade" id="editModal<?= $j['id_jenis']; ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= site_url('Category/edit'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" id="jenisbarang" name="jenisbarang" class="form-control"
                                value="<?= $j['jenisbarang']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-left: 2%;" type="submit" class="btn btn-primary mb-3"
                            name="submit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?= $this->endSection(); ?>