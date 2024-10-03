<?php
require_once '_functions.php';
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
$levelAdmin         = $_SESSION['level'] == 'Admin';
$levelAdminKaryawan = $_SESSION['level'] == 'Admin' || $_SESSION['level'] == 'Karyawan';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dry Laundry</title>
    <link rel="shortcut icon" href="<?=url('_assets/img/logo/dry_dry.png')?>" type="image/x-icon">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="_assets/bootstrap-5.3.0/css/bootstrap.min.css">
    <script src="_assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="_assets/javascript/dselect.js"></script>

    <!-- datatables css -->
    <link rel="stylesheet"
        href="_assets/bootstrap-5.3.0/css/datatables/cdnjs.cloudflare.com_ajax_libs_twitter-bootstrap_5.2.0_css_bootstrap.min.css">
    <link rel="stylesheet"
        href="_assets/bootstrap-5.3.0/css/datatables/cdn.datatables.net_1.13.4_css_dataTables.bootstrap5.min.css">

    <!-- datatables js -->
    <script defer src="_assets/javascript/datatables/code.jquery.com_jquery-3.5.1.js"></script>
    <script defer src="_assets/javascript/datatables/cdn.datatables.net_1.13.4_js_jquery.dataTables.min.js">
    </script>
    <script defer src="_assets/javascript/datatables/cdn.datatables.net_1.13.4_js_dataTables.bootstrap5.min.js">
    </script>

    <script defer src="_assets/javascript/script.js"></script>
</head>

<body>
    <!-- START: navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm mb-5">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="<?=url()?>">
                <img src="<?=url('_assets/img/logo/dry_dry.png')?>" alt="" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-md-2">
                        <a class="nav-link active" href="<?=url()?>">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="<?=url('riwayat_transaksi/index.php');?>">Riwayat Transaksi</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="<?=url('paket/list-harga.php');?>">List Harga</a>
                    </li>
                    <?php if ($levelAdmin) {?>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="<?=url('karyawan/index.php');?>">Management Karyawan</a>
                    </li>
                    <?php }?>
                    <?php if ($levelAdminKaryawan) {?>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="<?=url('paket/index.php');?>">Management Paket</a>
                    </li>
                    <?php }?>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="<?=url('about.php');?>">Tentang Kami</a>
                    </li>
                </ul>
                <!-- dropdown -->
                <div class="dropdown">
                    <a class="dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="text-black fw-semibold"><?=$_SESSION['nama']?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=url('akun/profil.php');?>">Profil</a></li>
                        <li><a class="dropdown-item" href="<?=url('akun/ubah_password.php');?>">Ubah Password</a></li>
                        <li>
                            <a class="dropdown-item" href="<?=url('logout.php')?>"
                                onclick="return confirm('Hi <?=$_SESSION['nama']?>, Ingin Keluar?');">
                                Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: navbar -->