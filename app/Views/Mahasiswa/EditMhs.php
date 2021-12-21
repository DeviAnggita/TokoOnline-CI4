<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('mahasiswa')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data </h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Data Vinf Box Course</h4>
            </div>

            <div class="card-body">
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

                    <form action="<?php echo base_url('Mahasiswa/update/'.$mhs['id']); ?>" method="post">

                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('nama'); ?>
                            </label>
                            <?php endif; ?>
                            <input type="text" name="nama" class="form-control" value="<?= $mhs['nama'] ?>"
                                placeholder="Isikan Nama Lengkap Mahasiswa">
                        </div>

                        <div class="form-group">
                            <label for="">Username</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('username'); ?>
                            </label>
                            <?php endif; ?>
                            <input type="text" name="username" class="form-control" value="<?= $mhs['username'] ?>"
                                placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('email'); ?>
                            </label>
                            <?php endif; ?>
                            <input type="email" name="email" class="form-control" value="<?= $mhs['email'] ?>"
                                placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('password'); ?>
                            </label>
                            <?php endif; ?>
                            <input type="password" name="password" class="form-control" value="<?= $mhs['password'] ?>"
                                placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('tanggal_lahir'); ?>
                            </label>
                            <?php endif; ?>
                            <input type="date" name="tanggal_lahir" class="form-control"
                                value="<?= $mhs['tanggal_lahir'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('jenis_kelamin'); ?>
                            </label>
                            <?php endif; ?>
                            <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" <?= $mhs['jenis_kelamin'] == 'Laki-Laki' ? "checked" : "" ?> required>
                                    <label class="form-check-label">Laki-Laki</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" <?= $mhs['jenis_kelamin'] == 'Perempuan' ? "checked" : "" ?> required>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('alamat'); ?>
                            </label>
                            <?php endif; ?>
                            <select name="alamat" class="form-control"  required>
                                    <option value="Sragen" <?= $mhs['alamat'] == 'Sragen' ? "selected" : "" ?>>Sragen</option>
                                    <option value="Surakarta" <?= $mhs['alamat'] == 'Surakarta' ? "selected" : "" ?>>Surakarta</option>
                                    <option value="Sukoharjo" <?= $mhs['alamat'] == 'Sukoharjo' ? "selected" : "" ?>>Sukoharjo</option>
                                    <option value="Karanganyar" <?= $mhs['alamat'] == 'Karanganyar' ? "selected" : "" ?>>Karanganyar</option>
                                    <option value="Jakarta" <?= $mhs['alamat'] == 'Jakarta' ? "selected" : "" ?>>Jakarta</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="">No. Handphone</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('no_hp'); ?>
                            </label>
                            <?php endif; ?>
                            <input type="text" name="no_hp" value="<?= $mhs['no_hp']; ?>" class="form-control" placeholder="Isikan no hp aktif ">
                        </div>

                        <div class="form-group">
                            <label for="">Status Keaktifan</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('status'); ?>
                            </label>
                            <?php endif; ?>
                            <input type="hidden" id="status" name="status" value="Mahasiswa Tidak Aktif">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" value="Mahasiswa Aktif" <?= $mhs['status'] == 'Mahasiswa Aktif' ? "checked" : "" ?>>
                                    <label class="form-check-label">
                                    Mahasiswa Aktif
                                    </label>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="">Program Studi</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('prodi'); ?>
                            </label>
                            <?php endif; ?>
                            <select name="prodi" class="form-control"  required>
                                    <option value="D3 Teknik Informatika" <?= $mhs['prodi'] == 'D3 Teknik Informatika' ? "selected" : "" ?>>D3 Teknik Informatika</option>
                                    <option value="D3 Teknik Sipil" <?= $mhs['prodi'] == 'D3 Teknik Sipil' ? "selected" : "" ?>>D3 Teknik Sipil</option>
                                    <option value="D3 Teknik Mesin" <?= $mhs['prodi'] == 'D3 Teknik Mesin' ? "selected" : "" ?>>D3 Teknik Mesin</option>
                                    <option value="D3 Teknik Kimia" <?= $mhs['prodi'] == 'D3 Teknik Kimia' ? "selected" : "" ?>>D3 Teknik Kimia</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="">Course</label>
                            <br />
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('course'); ?>
                            </label>
                            <?php endif; ?>
                            <a>
                            <div class="form-check">
                                    <input class="form-check-input" type="radio" name="course" value="Design Web" <?= $mhs['course'] == 'Design Web' ? "checked" : "" ?>>
                                    <label class="form-check-label">
                                    Design Web
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="course" value="Coding" <?= $mhs['course'] == 'Coding' ? "checked" : "" ?>>
                                    <label class="form-check-label">
                                    Coding
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="course" value="Keamanan Data" <?= $mhs['course'] == 'Keamanan Data' ? "checked" : "" ?>>
                                    <label class="form-check-label">
                                    Keamanan Data
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="course" value="Javascript" <?= $mhs['course'] == 'Javascript' ? "checked" : "" ?>>
                                    <label class="form-check-label">
                                    Javascript
                                    </label>
                                    <br>
                            </a>
                        </div>

                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <!-- Error -->
                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <label style="color: red;">
                                <?= $error = $validation->getError('ket'); ?>
                            </label>
                            <?php endif; ?>
                            <textarea type="text" name="ket" class="form-control"><?= $mhs['ket'];; ?></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<?= $this->endSection() ?>