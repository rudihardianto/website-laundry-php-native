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

    $nama     = ucwords(htmlspecialchars($karyawan['nama']));
    $username = strtolower(htmlspecialchars($karyawan['username']));
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

    header("refresh:3"); // refresh halaman 3 detik setelah update data

    return mysqli_affected_rows($db);
}

// update
function update_karyawan($up_kary)
{
    global $db;

    $id_user  = $up_kary['id_user'];
    $nama     = ucwords(htmlspecialchars($up_kary['nama']));
    $username = strtolower(htmlspecialchars($up_kary['username']));
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
    $nama_pkt_ck  = ucwords(htmlspecialchars($data_ck['nama_paket_ck']));
    $waktu_krj_ck = ucwords(htmlspecialchars($data_ck['waktu_kerja_ck']));
    $qty_ck       = htmlspecialchars($data_ck['kuantitas_ck']);
    $tarif_ck     = htmlspecialchars($data_ck['tarif_ck']);

    // Cek apakah paket sudah terdaftar
    $tb_cuci_komplit = mysqli_query($db, "SELECT * FROM tb_cuci_komplit WHERE nama_paket_ck='$nama_pkt_ck'");
    if (mysqli_num_rows($tb_cuci_komplit) > 0) {
        echo "
              <script>
                  alert('Nama Paket Sudah Terdaftar')
              </script>
          ";

        return false;
    }

    $query_ck = "INSERT INTO tb_cuci_komplit VALUES (
		null,'$nama_pkt_ck','$waktu_krj_ck','$qty_ck','$tarif_ck'
	)";
    mysqli_query($db, $query_ck);

    header("refresh:3"); // refresh halaman 3 detik setelah update data

    return mysqli_affected_rows($db);
}

// update
function update_ck($edit_ck)
{
    global $db;

    $id_ck        = $edit_ck['id_ck'];
    $nama_pkt_ck  = ucwords(htmlspecialchars($edit_ck['nama_paket_ck']));
    $waktu_krj_ck = ucwords(htmlspecialchars($edit_ck['waktu_kerja_ck']));
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

/* START: CRUD Dry Clean */
// create
function add_dc($data_dc)
{
    global $db;

    $nama_pkt_dc  = ucwords(htmlspecialchars($data_dc['nama_paket_dc']));
    $waktu_krj_dc = ucwords(htmlspecialchars($data_dc['waktu_kerja_dc']));
    $qty_dc       = htmlspecialchars($data_dc['kuantitas_dc']);
    $tarif_dc     = htmlspecialchars($data_dc['tarif_dc']);

    // Cek apakah paket sudah terdaftar
    $tb_dry_clean = mysqli_query($db, "SELECT * FROM tb_dry_clean WHERE nama_paket_dc='$nama_pkt_dc'");
    if (mysqli_num_rows($tb_dry_clean) > 0) {
        echo "
              <script>
                  alert('Nama Paket Sudah Terdaftar')
              </script>
          ";

        return false;
    }

    $query_dc = "INSERT INTO tb_dry_clean VALUES (
		null,'$nama_pkt_dc','$waktu_krj_dc','$qty_dc','$tarif_dc'
	)";
    mysqli_query($db, $query_dc);

    header("refresh:3"); // refresh halaman 3 detik setelah update data

    return mysqli_affected_rows($db);
}

// update
function update_dc($edit_dc)
{
    global $db;

    $id_dc        = $edit_dc['id_dc'];
    $nama_pkt_dc  = ucwords(htmlspecialchars($edit_dc['nama_paket_dc']));
    $waktu_krj_dc = ucwords(htmlspecialchars($edit_dc['waktu_kerja_dc']));
    $qty_dc       = htmlspecialchars($edit_dc['kuantitas_dc']);
    $tarif_dc     = htmlspecialchars($edit_dc['tarif_dc']);

    mysqli_query($db, "UPDATE tb_dry_clean SET
		nama_paket_dc = '$nama_pkt_dc',
		waktu_kerja_dc = '$waktu_krj_dc',
		kuantitas_dc = '$qty_dc',
		tarif_dc = '$tarif_dc'
		WHERE id_dc = '$id_dc'
	");

    header("refresh:1"); // refresh halaman 1 detik setelah update data

    return mysqli_affected_rows($db);
}

// delete
function delete_dc($del_dc)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_dry_clean WHERE id_dc = '$del_dc'");

    return mysqli_affected_rows($db);
}
/* END: CRUD Dry Clean */

/* START: CRUD Cuci Satuan */
// create
function add_cs($data_cs)
{
    global $db;

    $nama_pkt_cs  = ucwords(htmlspecialchars($data_cs['nama_cs']));
    $waktu_krj_cs = ucwords(htmlspecialchars($data_cs['waktu_kerja_cs']));
    $qty_cs       = htmlspecialchars($data_cs['kuantitas_cs']);
    $tarif_cs     = htmlspecialchars($data_cs['tarif_cs']);

    // Cek apakah paket sudah terdaftar
    $tb_cuci_satuan = mysqli_query($db, "SELECT * FROM tb_cuci_satuan WHERE nama_cs='$nama_pkt_cs'");
    if (mysqli_num_rows($tb_cuci_satuan) > 0) {
        echo "
              <script>
                  alert('Nama Paket Sudah Terdaftar')
              </script>
          ";

        return false;
    }

    $query_cs = "INSERT INTO tb_cuci_satuan VALUES (
		null,'$nama_pkt_cs','$waktu_krj_cs','$qty_cs','$tarif_cs'
	)";

    mysqli_query($db, $query_cs);

    header("refresh:3"); // refresh halaman 3 detik setelah update data

    return mysqli_affected_rows($db);
}

// update
function update_cs($edit_cs)
{
    global $db;

    $id_cs        = $edit_cs['id_cs'];
    $nama_pkt_cs  = ucwords(htmlspecialchars($edit_cs['nama_cs']));
    $waktu_krj_cs = ucwords(htmlspecialchars($edit_cs['waktu_kerja_cs']));
    $qty_cs       = htmlspecialchars($edit_cs['kuantitas_cs']);
    $tarif_cs     = htmlspecialchars($edit_cs['tarif_cs']);

    mysqli_query($db, "UPDATE tb_cuci_satuan SET
		nama_cs = '$nama_pkt_cs',
		waktu_kerja_cs = '$waktu_krj_cs',
		kuantitas_cs = '$qty_cs',
		tarif_cs = '$tarif_cs'
		WHERE id_cs = '$id_cs'
	");

    header("refresh:1"); // refresh halaman 1 detik setelah update data

    return mysqli_affected_rows($db);
}

// delete
function delete_cs($del_cs)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_cuci_satuan WHERE id_cs = '$del_cs'");

    return mysqli_affected_rows($db);
}
/* END: CRUD Cuci Satuan */

// Order
function order_ck($order_ck)
{
    global $db;

    $id_pel     = htmlspecialchars($order_ck['id_pelanggan_ck']);
    $nama_pel   = htmlspecialchars($order_ck['nama_pel_ck']);
    $no_telp    = htmlspecialchars($order_ck['no_telp_ck']);
    $alamat     = htmlspecialchars($order_ck['alamat_ck']);
    $jns_pkt    = htmlspecialchars($order_ck['jenis_paket_ck']);
    $berat_qty  = htmlspecialchars($order_ck['berat_qty_ck']);
    $tgl_masuk  = htmlspecialchars($order_ck['tgl_masuk_ck']);
    $tgl_keluar = htmlspecialchars($order_ck['tgl_keluar_ck']);
    $ket        = htmlspecialchars($order_ck['keterangan_ck']);

    // Ambil data id pelanggan dari tabel master
    $id_pel_ck = mysqli_query($db, "SELECT * FROM master WHERE id_pelanggan = '$id_pel'");
    if (mysqli_num_rows($id_pel_ck) === 1) {
        $result_ck = mysqli_fetch_assoc($id_pel_ck);

        $id_pel_ck = $result_ck['id_pelanggan'];
    }

    // Ambil data dari tabel daftar paket cuci komplit
    $pkt_ck = mysqli_query($db, "SELECT * FROM tb_cuci_komplit WHERE nama_paket_ck = '$jns_pkt'");

    if (mysqli_num_rows($pkt_ck) === 1) {

        $result_ck = mysqli_fetch_assoc($pkt_ck);

        $wkt_kerja_ck  = $result_ck['waktu_kerja_ck'];
        $tarif_perkilo = $result_ck['tarif_ck'];
        $total_bayar   = $berat_qty * $result_ck['tarif_ck'];

        /* Generate nomor order */
        $str      = uniqid();
        $limitNum = substr($str, 0, 7);
        $orderNum = 'CK-'.strtoupper($limitNum);
    }

    $insert_ck = "INSERT INTO tb_order_ck VALUES(
		null,'$orderNum',' $id_pel_ck','$nama_pel','$no_telp','$alamat',
		'$jns_pkt','$wkt_kerja_ck','$berat_qty','$tarif_perkilo',
		'$tgl_masuk','$tgl_keluar','$total_bayar',
		'$ket' )";
    mysqli_query($db, $insert_ck);

    header("refresh:3"); // refresh halaman 3 detik setelah update data

    return mysqli_affected_rows($db);
}

// Hapus Daftar Orderan Cuci Kering
function del_or_ck($or_numb_ck)
{
    global $db;
    $del_query_ck = "DELETE FROM tb_order_ck WHERE or_ck_number='$or_numb_ck'";
    mysqli_query($db, $del_query_ck);

    return mysqli_affected_rows($db);
}