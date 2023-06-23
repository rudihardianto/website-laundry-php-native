<?php 
    require_once '../_header.php';
    if (!isset($_SESSION['login'])) {
        echo "
        <script>
            document.location='http://localhost/laundry_rizal_skripsi/';
        </script>
        ";
        exit();
    }
?>

<?php if (isset($_POST['tambah_karyawan'])): ?>
<?php if (add_karyawan($_POST) > 0): ?>
<!-- berhasil -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Data Berhasil Di Tambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<!-- gagal -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Data Gagal Di Tambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif;?>

<!-- START: tambah data karyawan -->
<section id="tambah-data-karyawan" class="tambah-data-karyawan">
    <div class="container">
        <div class="row justify-content-center">
            <!-- title -->
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Tambah Data Karyawan</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url('karyawan/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form tambah data karyawan -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form action="" method="post">
                                    <input type="hidden" name="id_kar" value="">
                                    <input type="hidden" name="no_telp" value="">
                                    <input type="hidden" name="alamat" value="">
                                    <input type="hidden" name="level" value="Karyawan">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" id="nama" class="form-control"
                                                autocomplete="off" required autofocus>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" id="username" class="form-control"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-3 col-form-label">Email address</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" id="email" class="form-control"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" id="password" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" name="tambah_karyawan" class="btn btn-primary">
                                            Tambah
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form tambah data karyawan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: tambah data karyawan -->

<?php require_once '../_footer.php';?>