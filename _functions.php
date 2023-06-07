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

    $up_query = "UPDATE master SET
		nama 		= '$nama',
		username    = '$username',
		email 	    = '$email'
		WHERE id_user = '$id_user'
	";

    mysqli_query($db, $up_query);
    header("refresh:1"); // refresh halaman 1 detik setelah update data

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

/* START: CRUD Cuci Komplit */
// create
function add_ck($data_ck)
{
    global $db;
    $nama_pkt_ck  = htmlspecialchars($data_ck['nama_paket_ck']);
    $waktu_krj_ck = htmlspecialchars($data_ck['waktu_kerja_ck']);
    $qty_ck       = htmlspecialchars($data_ck['kuantitas_ck']);
    $tarif_ck     = htmlspecialchars($data_ck['tarif_ck']);

    $query_ck = "INSERT INTO tb_cuci_komplit VALUES (
		null,'$nama_pkt_ck','$waktu_krj_ck','$qty_ck','$tarif_ck'
	)";
    mysqli_query($db, $query_ck);

    return mysqli_affected_rows($db);
}

// update
function update_ck($edit_ck)
{
    global $db;

    $id_ck        = $edit_ck['id_ck'];
    $nama_pkt_ck  = htmlspecialchars($edit_ck['nama_paket_ck']);
    $waktu_krj_ck = htmlspecialchars($edit_ck['waktu_kerja_ck']);
    $qty_ck       = htmlspecialchars($edit_ck['kuantitas_ck']);
    $tarif_ck     = htmlspecialchars($edit_ck['tarif_ck']);

    mysqli_query($db, "UPDATE tb_cuci_komplit SET
		nama_paket_ck = '$nama_pkt_ck',
		waktu_kerja_ck = '$waktu_krj_ck',
		kuantitas_ck = '$qty_ck',
		tarif_ck = '$tarif_ck'
		WHERE id_ck = '$id_ck'
	");

    header("refresh:1"); // refresh halaman 1 detik setelah update data

    return mysqli_affected_rows($db);
}

// delete
function delete_ck($del_ck)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_cuci_komplit WHERE id_ck = '$del_ck'");

    return mysqli_affected_rows($db);
}
/* END: CRUD Cuci Komplit */
?>