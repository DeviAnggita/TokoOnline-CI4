<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?=site_url('mahasiswa')?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Input Data </h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h3>Form Input Data Vinf Box Course</h3>
            </div>
            <div class="card-body">
                <?= form_open('Mahasiswa/input') ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <p><b>Perhatian</b>
                            <?= $validation->listErrors() ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Nama Lengkap', 'nama' , ); ?>
                        </h5>
                        <?= form_input('nama', '', 'placeholder="Isikan Nama Lengkap Mahasiswa"; class="form-control"', 'text' ); ?>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Username', 'username'); ?></h5>
                        <?= form_input('username', '', 'placeholder="Isikan Username Mahasiswa"; class="form-control"', 'text' ); ?>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Email', 'email'); ?></h5>
                        <?= form_input('email', '', ' placeholder="Isikan Email Mahasiswa"; class="form-control"', 'text'); ?>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Password', 'password'); ?></h5>
                        <?= form_password('password', '', 'placeholder="Isikan Password Mahasiswa"; class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Konfirmasi Password', 'passconf'); ?></h5>
                        <?= form_password('passconf', '', 'placeholder="Isikan Konfirmasi Password sesuai isian form sebelumnya "; class="form-control"' ); ?>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Tanggal Lahir', 'tanggal_lahir'); ?></h5>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Jenis Kelamin', 'jenis_kelamin'); ?></h5>
                        <h6>
                            Laki-Laki <?= form_radio('jenis_kelamin', 'Laki-Laki', false); ?>
                            Perempuan <?= form_radio('jenis_kelamin', 'Perempuan ', false); ?>
                        </h6>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Alamat', 'alamat'); ?></h5>
                        <?php
                                $options = [
                                    'Sragen' => 'Sragen',
                                    'Surakarta'  => 'Surakarta',
                                    'Sukoharjo'    => 'Sukoharjo',
                                    'Karanganyar'  => 'Karanganyar',
                                    'Jakarta' => 'Jakarta',
                                ];
                                echo form_dropdown('alamat', $options, 'skh', 'class="form-control"');
                                ?>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('No. Handphone', 'no_hp'); ?></h5>
                        <input type="" name="no_hp" class="form-control" placeholder="Isikan no hp aktif ">
                    </div>
                    <div class="form-group">
                        <h5>Status Keaktifan</h5>
                        <?= form_hidden('status', 'Mahasiswa Tidak Aktif'); ?>
                        <h6> <?= form_checkbox('status', 'Mahasiswa Aktif', false); ?> Mahasiswa Aktif</h6>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Program Studi', 'prodi'); ?></h5>
                        <?php
                                $options = [
                                    'D3 Teknik Informatika'  => 'D3 Teknik Informatika',
                                    'D3 Teknik Sipil'    => 'D3 Teknik Sipil',
                                    'D3 Teknik Mesin'  => 'D3 Teknik Mesin',
                                    'D3 Teknik Kimia' => 'D3 Teknik Kimia',
                                ];
                                echo form_dropdown('prodi', $options, 'D3 Teknik Informatika', 'class="form-control"');
                                ?>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Course', 'course'); ?></h5>
                        <h6>
                            <?= form_radio('course', 'Design Web', false); ?> Design Web<br>
                            <?= form_radio('course', 'Coding', false); ?> Coding<br>
                            <?= form_radio('course', 'Keamanan Data', false); ?> Keamanan Data<br>
                            <?= form_radio('course', 'Javascript', false); ?> Javascript<br>
                        </h6>
                    </div>
                    <div class="form-group">
                        <h5><?= form_label('Keterangan', 'ket'); ?></h5>
                        <?= form_textarea('ket', '', 'placeholder="Silahkan menambahakan keterangan informasi tambahan di sini..."; class="form-control"',); ?>
                    </div>
                    <div class="form-group">
                        <?= form_hidden('fakultas', 'Sekolah Vokasi'); ?>
                    </div>
                    <div class="form-group">
                        <?= form_hidden('universitas', 'Sebelas Maret Surakarta'); ?>
                    </div>
                    <h3><input type="submit" value="Submit" class="btn btn-success" />
                        <input type="reset" value="Reset" class="btn btn-secondary" />
                    </h3>
                </form>
            </div>

            </form>
        </div>
    </div>


</section>
<?= $this->endSection() ?>