<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Vinf Box -Course</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Data Vinf Box Course</h4>
        </div>
        <div class="card-header">
            <div class="section-header-button">
                <a href="<?=site_url('mahasiswa/input')?>" class="btn btn-primary">Tambah Data</a>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Status Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Course</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>

                    <?php
                $no = 1;
                foreach ($mhs as $m) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['email']; ?></td>
                        <td><?= $m['jenis_kelamin']; ?></td>
                        <td><?= date('d/m/y',strtotime($m['tanggal_lahir'])); ?></td>
                        <td><?= $m['alamat']; ?></td>
                        <td><?= $m['status']; ?></td>
                        <td><?= $m['prodi']; ?></td>
                        <td><?= $m['course']; ?></td>
                        <td><?= $m['ket']; ?></td>
                        <td class=" text-center" style="width:10%">
                            <a href="<?= base_url('Mahasiswa/edit/'.$m['id']); ?>"
                                class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('Mahasiswa/detail/'.$m['id']); ?>" class="btn btn-success btn-sm"><i
                                    class="fas fa-eye"></i></a>
                            <a href="<?= base_url('Mahasiswa/delete/'.$m['id']); ?>" class="btn btn-danger btn-sm mr-2"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa <?= $m['nama']; ?>?')"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                        <?php endforeach; ?>
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


