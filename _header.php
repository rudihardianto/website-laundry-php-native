<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dry Laundry</title>
    <link rel="shortcut icon" href="_assets/img/logo/dry_dry.png" type="image/x-icon">
    <!-- my css -->
    <link rel="stylesheet" href="_assets/css/style.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="_assets/bootstrap-5.3.0/css/bootstrap.min.css">
</head>

<body>
    <!-- START: navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand" href="index.php">
                <img src="_assets/img/logo/dry_dry.png" alt="" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-md-2">
                        <a class="nav-link active" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Riwayat Transaksi</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Management Karyawan</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Daftar Paket</a>
                    </li>
                </ul>
                <!-- dropdown -->
                <div class="dropdown">
                    <a class="dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="text-black">Admin</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="#">keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: navbar -->