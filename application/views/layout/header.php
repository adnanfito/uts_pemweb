<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Theme style -->
    <link rel="stylesheet" href="hthttps://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

</head>

<body class="layout-top-nav accent-lightblue" data-new-gr-c-s-check-loaded="14.1165.0" data-gr-ext-installed=""
    style="height: auto">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <div class="navbar-brand">
                    <span class="brand-text font-weight-light">UTS</span>
                </div>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>jadwalmahasiswa" class="nav-link" style="cursor: pointer;"
                                onclick="">Jadwal
                                Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>mahasiswa" class="nav-link" style="cursor: pointer;" onclick="">
                                Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>matakuliah" class="nav-link" style="cursor: pointer;" onclick="">
                                Mata Kuliah</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>jadwal" class="nav-link" style="cursor: pointer;" onclick="">
                                Jadwal</a>
                        </li>
                    </ul>
                    <a href="<?= base_url() ?>/login/logout" style="margin: 0 0 0 auto">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </div>
        </nav>
        <!-- /.navbar -->