<?php
require_once '../_header.php';

if (!isset($_SESSION['login'])) {
    echo "
        <script>
            document.location='http://dry_laundry.test';
        </script>
        ";
    exit();
}
$id_user = $_GET['id_user'];
$update  = query("SELECT * FROM master WHERE id_user='$id_user'")[0];
?>

<?php if (isset($_POST['update'])): ?>
<?php if (updateKaryawan($_POST) > 0): ?>
<!-- berhasil -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-10">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Data Berhasil Di Ubah.
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
                <strong>Maaf!</strong> Data Gagal Di Ubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>

<!-- START: menu -->
<section id="update-data-karyawan" class="update-data-karyawan">
    <div class="container">
        <div class="row justify-content-center">
            <!-- title -->
            <div class="col col-md-10 my-2 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h5 class="card-title fw-bold">Update Data Karyawan</h5>
                            </div>
                            <div class="col text-end text-nowrap">
                                <a href="<?=url('karyawan/index.php');?>"
                                    class="btn btn-sm btn-outline-secondary">Kembali</a>
                            </div>
                        </div>
                        <hr>

                        <!-- START: form update data karyawan -->
                        <div class="row justify-content-center">
                            <div class="col col-md-10">
                                <form action="" method="post">
                                    <input type="hidden" name="id_user" value="<?=$update['id_user']?>">
                                    <input type="hidden" name="level" value="<?=$update['level']?>">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" id="nama" class="form-control"
                                                value="<?=$update['nama']?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" id="username" class="form-control"
                                                value="<?=$update['username']?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-3 col-form-label">Email address</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" id="email" class="form-control"
                                                value="<?=$update['email']?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="" class="btn btn-outline-secondary">Refresh</a>

                                        <button type="submit" name="update" class="btn btn-primary"
                                            onclick="return confirm('Ingin ubah Data?');">
                                            Update Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: form update data karyawan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: menu -->

<?php require_once '../_footer.php';?>