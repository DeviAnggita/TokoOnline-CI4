<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('user') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>User</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>User Dev's Store</h4>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-md">
                <thead>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Created Date</th>
                </thead>
                <tbody>
                    <?php foreach($data['users'] as $index=>$user): ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->username ?></td>
                        <td><?= $user->role ?></td>
                        <td><?= $user->created_date ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a>Note : </a>
            </br>
            <a>Jika Role = 0 adalah Admin</a>
            </br>
            <a>Jika Role = 1 adalah User</a>
        </div>
    </div>
    <div style="float:right">

    </div>
    <?= $this->endSection() ?>
</section>