<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('mahasiswa') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Detail Data </h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Form Detail Data Vinf Box Course</h4>
        </div>
        <div class="card-body table-responsive">
            <table>


                <div class="container-fluid">
                    <?php
                    // Library Tabel
                    $table = new \CodeIgniter\View\Table();
                    $template = [
                        'table_open' => '<table class="table table-striped" style="width:100%" id="MyTable">'
                    ];
                    $table->setTemplate($template);
                    $table->setHeading('Nama', 'Username', 'Email', 'Tanggal Lahir', 'Alamat', 'No. Handphone', 'Prodi', 'Fakultas', 'Universitas', 'Jenis Kelamin', 'Status', 'Course', 'Ket');
                    $table->addRow($mhs['nama'], $mhs['username'], $mhs['email'], $mhs['tanggal_lahir'], $mhs['alamat'], $mhs['no_hp'],  $mhs['prodi'], $mhs['fakultas'], $mhs['universitas'], $mhs['jenis_kelamin'], $mhs['status'], $mhs['course'], $mhs['ket']);
                    //$table->setFooting('Nama', 'Username', 'Email', 'Tanggal Lahir', 'Alamat', 'No. Handphone', 'Prodi', 'Fakultas', 'Universitas', 'Jenis Kelamin', 'Status','Course','Ket');
                    echo $table->generate();
                    ?>
                    <br>
                    <p><?= anchor('mahasiswa', 'List Data Vinf Box Course'); ?></p>
                    <p><?= anchor('mahasiswa/input', 'Input Data Vinf Box Course'); ?></p>
                </div>

            </table>

        </div>
        </table>
    </div>



    </div>
</section>
<?= $this->endSection() ?>