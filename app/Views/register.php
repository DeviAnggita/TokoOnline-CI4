<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?=base_url()?>/template/assets/img/avatar/avatar-1.png" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>
                            <?php
                                $username = [
                                    'name' => 'username',
                                    'id' => 'username',
                                    'value' => null,
                                    'class' => 'form-control'
                                ];

                                $password = [
                                    'name' => 'password',
                                    'id' => 'password',
                                    'class' => 'form-control'
                                ];

                                $repeatPassword = [
                                    'name' => 'repeatPassword',
                                    'id' => 'repeatPassword',
                                    'class' => 'form-control'
                                ];
                                $session = session();
                                $errors = $session->getFlashdata('errors');
                            ?>

                            <?php if($errors != null): ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Terjadi Kesalahan</h4>
                                <hr>
                                <p class="mb-0">
                                    <?php
                                    foreach($errors as $err){
                                        echo $err.'<br>';
                                    }
                                ?>
                                </p>
                            </div>
                            <?php endif ?>
                            <?= form_open('Auth/register') ?>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <?= form_label("Username", "username") ?>
                                        <?= form_input($username) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label("Password", "password") ?>
                                        <?= form_password($password) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= form_label("Repeat Password", "repeatPassword") ?>
                                        <?= form_password($repeatPassword) ?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" value="Submit"
                                            class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?= site_url('auth/login') ?>"
                                            class="btn btn-primary btn-lg btn-block">
                                            Login
                                        </a>
                                    </div>
                                </form>
                                <?= form_close() ?>
                            </div>

                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Devi Anggita Ambarwati 2021
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js">
    </script>
    <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js">
    </script>
    <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>

</body>

</html>