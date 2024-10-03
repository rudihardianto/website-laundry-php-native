<?php 
    require_once('_functions.php');

    // cek apabila user sudah login
    if (isset($_SESSION["login"]) && isset($_SESSION['master'])) {
        echo "
        <script>
            document.location='http://localhost/laundry_rizal_skripsi/';
        </script>
        ";
        exit();
    }

    if (isset($_POST['register'])) {
        if (add_user($_POST) > 0) {
            echo "
                <script>
                    alert('Selamat, Pendaftaran akun anda berhasil!');
                    document.location='http://localhost/laundry_rizal_skripsi/login.php';
                </script>
        ";
        } else {
            echo mysqli_error($db);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
    <link rel="shortcut icon" href="<?=url('_assets/img/logo/dry_dry.png')?>" type="image/x-icon">
    <!-- my css -->
    <link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="<?=url('_assets/bootstrap-5.3.0/css/bootstrap.min.css');?>">
    <script src="<?=url('_assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js');?>"></script>
</head>

<body>

    <section id="login" class="login mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-10">
                    <div class="card">
                        <div class="text-center mt-4">
                            <img src="<?=url('_assets/img/logo/dry_dry.png')?>" alt="" width="50">
                            <h5 class="fw-bold my-4">Daftar Akun Baru</h5>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <input type="hidden" name="level" value="User">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="nama" required
                                                autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" id="username"
                                                autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" required
                                                autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_telp" class="form-label">No Telepon</label>
                                            <input type="number" name="no_telp" class="form-control" id="no_telp"
                                                required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label for="konfirm-password" class="form-label">Konfirmasi Password</label>
                                            <input type="password" name="password2" class="form-control"
                                                id="konfirm-password" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                                            <textarea name="alamat" id="alamat" class="form-control" required
                                                autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" name="register" class="btn btn-primary">
                                        Daftar Akun
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

<?php require_once '_footer.php'?>