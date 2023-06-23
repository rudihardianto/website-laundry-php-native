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
    $profil = query("SELECT * FROM master WHERE id_user = '$_SESSION[id_user]'")[0];
    // var_dump($profil);
?>

<?php if (isset($_POST['update'])): ?>
<?php if (update_user($_POST) > 0): ?>
<!-- berhasil -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-6">
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
        <div class="col col-md-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong> Data Gagal Di Ubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<?php endif?>

<!-- START: profil saya -->
<section id="profil" class="main-profil">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="col">
                                <input type="hidden" name="id_user" value="<?=$profil['id_user']?>">
                                <input type="hidden" name="level" value="<?=$profil['level']?>">
                                <!-- id pelanggan -->
                                <div class="mb-3">
                                    <label for="id_pel" class="form-label">ID Pelanggan</label>
                                    <input type="text" name="id_pelanggan" id="id_pel" class="form-control"
                                        autocomplete="off" value="<?=$profil["id_pelanggan"];?>" disabled>
                                </div>
                                <!-- username -->
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        autocomplete="off" value="<?=$profil["username"];?>" readonly>
                                </div>
                                <!-- nama -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Pelanggan</label>
                                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off"
                                        value="<?=$profil["nama"];?>">
                                </div>
                                <!-- email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" autocomplete="off"
                                        value="<?=$profil["email"];?>">
                                </div>
                                <!-- no telepon -->
                                <div class="mb-3">
                                    <label for="no-telp" class="form-label">No Telepon</label>
                                    <input type="number" name="no_telp" id="no-telp" class="form-control"
                                        value="<?=$profil["no_telp"];?>">
                                </div>
                                <!-- alamat -->
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea type="text" name="alamat" id="alamat" class="form-control"
                                        autocomplete="off"><?=$profil["alamat"];?></textarea>
                                </div>
                            </div>

                            <!-- START: Button -->
                            <div class="text-end">
                                <!-- tombol trigger modal update password -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Ubah Password
                                </button>

                                <!-- Modal ubah password -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    Ubah Password: <?=$profil["nama"];?>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col text-start">
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">
                                                                Password Lama
                                                            </label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control" autocomplete="off">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">
                                                                Password Baru
                                                            </label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control" autocomplete="off">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">
                                                                Konfirmasi Password Baru
                                                            </label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Ubah Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- button update -->
                                <button type="submit" name="update" class="btn btn-primary"
                                    onclick="return confirm('Ingin ubah Data?');">
                                    Ubah Data
                                </button>
                            </div>
                            <!-- END: Button -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: profil saya -->

<?php require_once '../_footer.php';?>