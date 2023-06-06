<?php

// Koneksi ke Database
$db = mysqli_connect('localhost', 'root', '', 'laundry_app');

// Fungsi untuk menampilkan semua query(data) dari database
function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Absolute URL
// Absolute url adalah alamat yang menunjukkan suatu dokumen / direktori, dengan menyertakan alamat domain / host
function url($url = null)
{
    $url_utama = "http://localhost/laundry_rizal_skripsi";
    if ($url != null) {
        return $url_utama.'/'.$url;
    } else {
        return $url_utama;
    }
}

/* START: CRUD (Management karyawan) */
// create
function add_karyawan($karyawan)
{
    global $db;

    $nama     = htmlspecialchars($karyawan['nama']);
    $username = htmlspecialchars($karyawan['username']);
    $email    = htmlspecialchars($karyawan['email']);
    $password = stripcslashes(htmlspecialchars($karyawan['password']));
    $level    = $karyawan['level'];

    // Cek apakah username dan email sudah tersedia
    $master = mysqli_query($db, "SELECT * FROM master WHERE username='$username' OR email='$email'");
    if (mysqli_num_rows($master) > 0) {
        echo "
            <script>
				alert('Username atau Email Sudah Terdaftar')
            </script>
        ";

        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $insert   = "INSERT INTO master VALUES (null,'$nama','$email','$username','$password','$level')";
    mysqli_query($db, $insert);

    return mysqli_affected_rows($db);
}

// update
function update_karyawan($up_kary)
{
    global $db;

    $id_user  = $up_kary['id_user'];
    $nama     = htmlspecialchars($up_kary['nama']);
    $username = htmlspecialchars($up_kary['username']);
    $email    = htmlspecialchars($up_kary['email']);
    $password = password_hash($up_kary['email'], PASSWORD_DEFAULT);

    $up_query = "UPDATE master SET
		nama 		= '$nama',
		username    = '$username',
		email 	    = '$email',
		password    = '$password'
		WHERE id_user = '$id_user'
	";

    mysqli_query($db, $up_query);

    return mysqli_affected_rows($db);
}

// delete
function delete_karyawan($id_karyawan)
{
    global $db;
    mysqli_query($db, "DELETE FROM master WHERE id_user = '$id_karyawan'");

    return mysqli_affected_rows($db);
}

/* END: CRUD (Management karyawan) */

?>