<html>

<head>
    <title>Cetak Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <script>
    <?= 'alert("Data Berhasil disubmit")'; ?>
    </script>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <caption>
                            <h2 style="text-align: center;"><b>Data Mahasiswa</b></h2>
                        </caption>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>: </td>
                                <td><?= set_value('nama'); ?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>: </td>
                                <td><?= set_value('username'); ?></td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td>: </td>
                                <td><?= set_value('email'); ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>: </td>
                                <td><?= set_value('tanggal_lahir'); ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: </td>
                                <td><?= set_value('alamat'); ?></td>
                            </tr>
                            <tr>
                                <td>No. Handphone</td>
                                <td>: </td>
                                <td><?= set_value('no_hp'); ?></td>
                            </tr>
                            <tr>
                                <td>Prgram Studi</td>
                                <td>: </td>
                                <td><?= set_value('prodi'); ?></td>
                            </tr>
                            <tr>
                                <td>Fakultas</td>
                                <td>: </td>
                                <td><?= set_value('fakultas'); ?></td>
                            </tr>
                            <tr>
                                <td>Universitas</td>
                                <td>: </td>
                                <td><?= set_value('univ'); ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: </td>
                                <td><?= set_value('gender'); ?></td>
                            </tr>
                            <tr>
                                <td>Status Keaktifan</td>
                                <td>: </td>
                                <td><?= set_value('status'); ?></td>
                            </tr>
                            <tr>
                                <td>Course</td>
                                <td>: </td>
                                <td><?= set_value('course'); ?></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>: </td>
                                <td><?= set_value('keterangan'); ?></td>
                            </tr>
                        </table>
                        <p><?= anchor('mahasiswa', 'Coba Lagi!') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>

</html>