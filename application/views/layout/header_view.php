<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Rental Mobil</title>

        <!-- Fontfaces CSS-->
        <link href="<?= site_url('assets/css/') ?>font-face.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/font-awesome-4.7/css/') ?>font-awesome.min.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/font-awesome-5/css/') ?>fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/mdi-font/css/') ?>material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="<?= site_url('assets/vendor/bootstrap-4.1/') ?>bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="<?= site_url('assets/vendor/animsition/') ?>animsition.min.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/bootstrap-progressbar/') ?>bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/wow/') ?>animate.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/css-hamburgers/') ?>hamburgers.min.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/slick/') ?>slick.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/select2/') ?>select2.min.css" rel="stylesheet" media="all">
        <link href="<?= site_url('assets/vendor/perfect-scrollbar/') ?>perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?= site_url('assets/css/') ?>theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="<?= site_url('assets/') ?>index.html">
                                Admin
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="<?= base_url('dashboard') ?>">
                        <h2>Rental Mobil</h2>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="<?= site_url('/customer') ?>">
                                    <i class="fas fa-users"></i>Customer</a>
                            </li>
                            <li>
                                <a href="<?= site_url('/type_mobil') ?>">
                                    <i class="fas fa-car"></i>Type Mobil</a>
                            </li>
                            <li>
                                <a href="<?= site_url('/mobil') ?>">
                                    <i class="fas fa-car"></i>Mobil</a>
                            </li>
                            <li>
                                <a href="<?= site_url('/driver') ?>">
                                    <i class="fas fa-user"></i>Driver</a>
                            </li>
                            <li>
                                <a href="<?= site_url('/transaksi') ?>">
                                    <i class="far fa-money-bill-alt"></i>Transaksi</a>
                            </li>
                            <?php if ($this->session->userdata('level') === '1'): ?>
                                <li>
                                    <a href="<?= site_url('/admin') ?>">
                                        <i class="far fa-user-circle"></i>Admin</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                </form>
                                <div class="header-button">
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="<?= base_url('assets/') ?>images/icon/admin-image.png" alt="John Doe">
                                            </div>
                                            <div class="content">
                                                <?php if ($this->session->userdata('level') === '1'): ?>
                                                    <a class="js-acc-btn" href="#">Super Admin</a>
                                                <?php elseif ($this->session->userdata('level') === '2'): ?>
                                                    <a class="js-acc-btn" href="#">Admin</a>
                                                <?php endif; ?>

                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="<?= base_url('assets/') ?>images/icon/admin-image.png" alt="John Doe">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <?php if ($this->session->userdata('level') === '1'): ?>
                                                                <a href="#">Super Admin</a>
                                                            <?php elseif ($this->session->userdata('level') === '2'): ?>
                                                                <a href="#">Admin</a>
                                                            <?php endif; ?>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="<?php echo site_url('login/logout'); ?>">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">