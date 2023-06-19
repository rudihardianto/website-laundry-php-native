<?php
    require_once '_functions.php';
    if (isset($_SESSION["login"]) && isset($_SESSION['username'])) {
        echo "
        <script>
            document.location='http://localhost/laundry_rizal_skripsi/';
        </script>
        ";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="<?=url('_assets/img/logo/dry_dry.png')?>" type="image/x-icon">
    <!-- my css -->
    <link rel="stylesheet" href="<?=url('_assets/css/style.css')?>">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="<?=url('_assets/bootstrap-5.3.0/css/bootstrap.min.css');?>">
    <script src="<?=url('_assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js');?>"></script>
</head>

<body>

    <?php 
        if (isset($_POST['login'])) {
            $username = $_POST['username'];   
            $password = $_POST['password'];   

            $data = mysqli_query($db,  "SELECT * FROM master WHERE username = '$username'");

            // cek username
            if (mysqli_num_rows($data) > 0) {
                // cek password
                $hasil = mysqli_fetch_assoc($data);
                if (password_verify($password, $hasil['password'])) {
                    // set session
			        $_SESSION['id_user'] = $hasil['id_user'];
			        $_SESSION['id_pelanggan'] = $hasil['id_pelanggan'];
			        $_SESSION['nama'] = $hasil['nama'];
                    $_SESSION['username'] = $hasil['username'];;
			        $_SESSION['email'] = $hasil['email'];
			        $_SESSION['no_telp'] = $hasil['no_telp'];
			        $_SESSION['alamat'] = $hasil['alamat'];
			        $_SESSION['level'] = $hasil['level'];
                    $_SESSION['login'] = true;
                    
                    echo "
                    <script>
                        document.location='http://localhost/laundry_rizal_skripsi/';
                    </script>
                    ";
                } else {
                    echo '
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-md-4 mt-5">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Maaf!</strong> Username atau password Anda salah!.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                    header("refresh:2"); // refresh halaman 2 detik
                }
            }
        }
    ?>

    <section id="login" class="login mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-4">
                    <div class="card">
                        <div class="text-center mt-4">
                            <img src="<?=url('_assets/img/logo/dry_dry.png')?>" alt="" width="75">
                            <h5 class="fw-bold my-4">Login</h5>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        autocomplete="off" required>
                                </div>
                                <div class="text-end">
                                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                                </div>
                                <hr>
                                <p>
                                    Belum punya akun? <a href="<?=url('register.php');?>" class="fw-bold">Daftar
                                        Akun</a>
                                </p>
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