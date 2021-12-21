<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> Dev's Store &mdash; Dashboard</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/summernote/dist/summernote-bs4.css">


</head>


<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>

                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="<?=base_url()?>/template/assets/img/avatar/avatar-1.png"
                                            class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Salma Sabrina</b>
                                        <p>Hello, Devii !</p>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                            </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Template update is available now!
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>You</b> and <b>Annisya Putri S.</b> are now friends
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-success text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Low disk space. Let's clean it!
                                        <div class="time">17 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Dev's Store!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?=base_url()?>/template/assets/img/avatar/avatar-1.png"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Devi Anggita</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('auth/logout') ?>" class=" dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- Main side menu -->
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Dev's Store</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">DS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>

                        <?php if(session()->get('role')==1): ?>
                        <li class="nav-item dropdown active">
                            <a href="<?= site_url('etalase') ?>" class="nav-link"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Sub Menu</li>
                        <li><a class="nav-link" href="<?= site_url('etalase') ?>"><i class="far fa-calendar"></i>
                                <span>Event</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('etalase') ?>" class="nav-link"><i class="fas fa-archive"></i>
                                <span>Table</span></a>
                        </li>

                        <?php endif ?>

                        <?php if(session()->get('role')==0): ?>
                        <li class="nav-item dropdown active">
                            <a href="<?= site_url('barang') ?>" class="nav-link"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Sub Menu</li>
                        <li><a class="nav-link" href="<?= site_url('barang') ?>"><i class="far fa-calendar"></i>
                                <span>Event</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('barang') ?>" class="nav-link"><i class="fas fa-archive"></i>
                                <span>Table</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fa fa-shopping-cart"></i>
                                <span>Barang</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= site_url('category') ?>">Category</a>
                                <li><a class="nav-link" href="<?= site_url('barang') ?>">List Barang</a></li>
                                <li><a class="nav-link" href="<?= site_url('barang/create') ?>">Tambah Barang</a>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('transaksi')?>" class="nav-link">
                                <i class="fas fa-money-bill-wave"></i>
                                <span>Transaksi</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('user')?>">
                                <i class="fas fa-user"></i>
                                <span>User</span></a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('etalase')?>">
                                <i class="fas fa-money-check"></i>
                                <span>Etalase</span></a>
                        </li>
                        <?php endif ?>
                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                                <i class="fas fa-rocket"></i> Dev's Store
                            </a>
                        </div>
            </div>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    </div>


    <!-- General JS Scripts -->
    <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <?= $this->renderSection('script') ?>
    <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/js/jquery.nicescroll.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>


    <!-- Template JS File -->
    <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
    <script src="<?=base_url()?>/template/assets/js/custom.js"></script>


</body>

</html>