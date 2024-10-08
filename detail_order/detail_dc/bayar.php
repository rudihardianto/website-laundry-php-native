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
$nomor_or = $_GET['or_dc_number'];
$data     = query("SELECT * FROM tb_order_dc WHERE or_dc_number = '$nomor_or'")[0];

if (isset($_POST['bayar'])) {
    if (transaksi_dc($_POST) > 0) {
        echo "
            <script>
                alert('Pembayaran Berhasil!');
                document.location='http://dry_laundry.test/riwayat_transaksi/index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Pembayaran Gagal!');
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Order: <?=$data['or_dc_number']?></title>
    <link rel="shortcut icon" href="<?=url('_assets/img/logo/dry_dry.png')?>" type="image/x-icon">
    <!-- my css -->
    <link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="<?=url('_assets/bootstrap-5.3.0/css/bootstrap.min.css');?>">
    <script src="<?=url('_assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js');?>"></script>
</head>

<body>

    <div class="container my-5">
        <div class="row d-flex justify-content-center align-items-center text-center">
            <div class="col col-md-6">
                <div class="card text-center justify-content-center">
                    <div class="text-center my-4">
                        <img src="<?=url('_assets/img/payment.svg')?>" alt="Icon Payment" width="170">
                    </div>
                    <div class="card-body">
                        <h5>#no_order: <?=$data['or_dc_number']?></h5>
                        <p>Masukkan nominal untuk melakukan transaksi</p>
                        <form action="" method="post">
                            <input type="hidden" name="or_number" value="<?=$data['or_dc_number']?>">
                            <input type="hidden" name="id_pel" value="<?=$data['id_pelanggan_dc']?>">
                            <input type="hidden" name="pelanggan" value="<?=$data['nama_pel_dc']?>">
                            <input type="hidden" name="no_telp" value="<?=$data['no_telp_dc']?>">
                            <input type="hidden" name="alamat" value="<?=$data['alamat_dc']?>">
                            <input type="hidden" name="j_paket" value="<?=$data['jenis_paket_dc']?>">
                            <input type="hidden" name="wkt_kerja" value="<?=$data['wkt_krj_dc']?>">
                            <input type="hidden" name="berat" value="<?=$data['berat_qty_dc']?>">
                            <input type="hidden" name="h_perkilo" value="<?=$data['harga_perkilo']?>">
                            <input type="hidden" name="tgl_msk" value="<?=$data['tgl_masuk_dc']?>">
                            <input type="hidden" name="tgl_klr" value="<?=$data['tgl_keluar_dc']?>">
                            <input type="hidden" name="total" value="<?=$data['tot_bayar']?>">
                            <input type="hidden" name="keterangan" value="<?=$data['keterangan_dc']?>">

                            <div class="row justify-content-center align-items-center m-4">
                                <div class="col-10 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" name="nominal" autocomplete="off" class="form-control"
                                            placeholder="Nominal <?='Rp. ' . $data['tot_bayar']?>" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="bayar" class="btn btn-primary btn-lg px-5 py-2">Bayar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php require_once '../../_footer.php'?>