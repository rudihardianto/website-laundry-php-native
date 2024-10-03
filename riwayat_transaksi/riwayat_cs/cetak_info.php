<?php 
    require_once '../../_functions.php';
    if (!isset($_SESSION['login'])) {
        echo "
        <script>
            document.location='http://dry_laundry.test';
        </script>
        ";
        exit();
    }
    $id_cs = $_GET['id_cs'];
    $data = query("SELECT * FROM tb_riwayat_cs WHERE id_cs = '$id_cs'")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice <?=$data['or_number'];?></title>
    <style>
    @media print {
        .btn {
            display: none !important;
        }
    }
    </style>
    <link rel="shortcut icon" href="<?=url('_assets/img/logo/dry_dry.png')?>" type="image/x-icon">
    <!-- my css -->
    <link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="<?=url('_assets/bootstrap-5.3.0/css/bootstrap.min.css');?>">
    <script src="<?=url('_assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js');?>"></script>
</head>

<body>

    <!-- START: menu -->
    <section id="invoice" class="invoice my-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- START: invoice header -->
                            <div class="invoice-header">
                                <div class="row d-flex align-items-center text-center">
                                    <div class="col">
                                        <!-- logo -->
                                        <div class="logo">
                                            <img src="<?=url('_assets/img/logo/dry_dry.png');?>" height="50"
                                                class="my-2">
                                        </div>
                                        <!-- no order -->
                                        <div class="invoice-no_order">
                                            <span class="fw-semibold text-muted">Invoice Number :
                                                <?=$data['or_number']?></span>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <!-- END: invoice header -->

                            <!-- START: invoice body -->
                            <div class="invoice-body">
                                <div class="row align-items-center text-center">
                                    <div class="col">
                                        <!-- title invoice body -->
                                        <div class="fw-semibold text-muted my-2">
                                            Bukti Transaksi
                                        </div>
                                    </div>
                                </div>

                                <div class="table-invoice">
                                    <!-- nama -->
                                    <div class="row my-1">
                                        <div class="col-4 fw-semibold">Nama</div>
                                        <div class="col"><?=$data['pelanggan']?></div>
                                    </div>
                                    <!-- telepon -->
                                    <div class="row my-1">
                                        <div class="col-4 fw-semibold">Telepon</div>
                                        <div class="col"><?=$data['no_telp']?></div>
                                    </div>
                                    <!-- alamat -->
                                    <div class="row my-1">
                                        <div class="col-4 fw-semibold">Alamat</div>
                                        <div class="col"><?=$data['alamat']?></div>
                                    </div>
                                    <!-- tanggal order -->
                                    <div class="row my-1">
                                        <div class="col-4 fw-semibold">Tanggal Order</div>
                                        <div class="col"><?=$data['tgl_msk']?></div>
                                    </div>
                                    <!-- tanggal diambil -->
                                    <div class="row my-1">
                                        <div class="col-4 fw-semibold">Tanggal Diambil</div>
                                        <div class="col"><?=$data['tgl_klr']?></div>
                                    </div>

                                    <!-- table rincian barang -->
                                    <div class="row justify-content-center mt-3">
                                        <div class="col">
                                            <div class="table-responsive">
                                                <table class="table table-sm border">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="4" class="fw-semibold">Jenis</td>
                                                            <td colspan="4" class="fw-semibold">Berat (Kg)</td>
                                                            <td colspan="4" class="fw-semibold">Harga Per-Kg
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4"><?=$data['j_paket']?></td>
                                                            <td colspan="4"><?=$data['jml_pcs'] . " Pcs"?></td>
                                                            <td colspan="4">
                                                                <?="Rp. " . $data['h_perpcs'] . " x " . $data['jml_pcs']?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="text-end fw-semibold table-active">
                                                                Total
                                                            </td>
                                                            <td colspan="4" class="fw-semibold">
                                                                <?="Rp. ".$data['total']?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="text-end fw-semibold table-active">
                                                                Nominal Bayar
                                                            </td>
                                                            <td colspan="4" class="fw-semibold">
                                                                <?="Rp. ".$data['nominal_byr']?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="8" class="text-end fw-semibold table-active">
                                                                Uang Kembali
                                                            </td>
                                                            <td colspan="4" class="fw-semibold">
                                                                <?="Rp. ".$data['kembalian']?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- keterangan -->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="fw-semibold">Keterangan:</div>
                                                    <div class="lead fs-6 fst-italic">
                                                        <?=$data['keterangan']?>
                                                    </div>
                                                </div>
                                                <hr class="my-3">
                                                <div class="footer-invoice">
                                                    <div class="text-center fw-bold">Dry Laundry</div>
                                                    <div class="text-center">terimakasih telah menggunakan jasa kami.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: invoice body -->
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <!-- START: button -->
                    <div class="cetak text-nowrap">
                        <div class="col mb-2">
                            <div class="printbtn btn btn-outline-primary" id="btnPrint">
                                <img src="<?=url('_assets/img/printer.svg')?>" width="48" alt="print icon">
                                <span>Cetak Invoice</span>
                            </div>
                        </div>
                        <div class="col">
                            <a href="<?=url('riwayat_transaksi/index.php')?>"
                                class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </div>
                    <!-- END: button -->
                </div>
            </div>
        </div>
    </section>
    <!-- END: menu -->

    <script>
    let print = document.getElementById('btnPrint');
    print.addEventListener('click', function() {
        return window.print();
    });
    </script>

</body>

</html>