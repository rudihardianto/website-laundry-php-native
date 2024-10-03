<?php

session_start();

// Koneksi ke Database
$db = mysqli_connect('localhost', 'root', '', 'dry_laundry');

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
    $url_utama = "http://localhost/dry_laundry";
    if ($url != null) {
        return $url_utama . '/' . $url;
    } else {
        return $url_utama;
    }
}

// Hitung total order semua paket
function jmlOrder()
{
    $jml_ck      = count(query("SELECT * FROM tb_order_ck"));
    $jml_dc      = count(query("SELECT * FROM tb_order_dc"));
    $jml_cs      = count(query("SELECT * FROM tb_order_cs"));
    $total_order = $jml_ck + $jml_dc + $jml_cs;

    return $total_order;
}

// hitung semua paket yang tersedia
function jmlPaket()
{
    $jml_pkt_ck = count(query("SELECT * FROM tb_cuci_komplit"));
    $jml_pkt_cs = count(query("SELECT * FROM tb_cuci_satuan"));
    $jml_pkt_dc = count(query("SELECT * FROM tb_dry_clean"));
    $jmlPkt     = $jml_pkt_ck + $jml_pkt_cs + $jml_pkt_dc;

    return $jmlPkt;
}

// fungsi untuk merubah format tanggal
function formatDate($tgl)
{
    $tgl = explode('-', $tgl);

    if ($tgl[1] == '01') {
        $tgl[1] = "Januari";
    } else if ($tgl[1] == '02') {
        $tgl[1] = "Februari";
    } else if ($tgl[1] == '03') {
        $tgl[1] = "Maret";
    } else if ($tgl[1] == '04') {
        $tgl[1] = "April";
    } else if ($tgl[1] == '05') {
        $tgl[1] = "Mei";
    } else if ($tgl[1] == '06') {
        $tgl[1] = "Juni";
    } else if ($tgl[1] == '07') {
        $tgl[1] = "Juli";
    } else if ($tgl[1] == '08') {
        $tgl[1] = "Agustus";
    } else if ($tgl[1] == '09') {
        $tgl[1] = "September";
    } else if ($tgl[1] == '10') {
        $tgl[1] = "Oktober";
    } else if ($tgl[1] == '11') {
        $tgl[1] = "November";
    } else if ($tgl[1] == '12') {
        $tgl[1] = "Desember";
    }

    $tgl = $tgl[2] . ' ' . $tgl[1] . ' ' . $tgl[0];

    return $tgl;
}

// random key untuk id
function randomString($length)
{
    $str        = "";
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }

    return $str;
}

/* START: User */
// create
function addUser($profil)
{
    global $db;

    /* Generate ID Pelanggan */
    $id_pelanggan = trim('PLG-' . randomString(4));
    $nama         = ucwords(htmlspecialchars($profil['nama']));
    $username     = strtolower(stripslashes(htmlspecialchars($profil['username'])));
    $email        = htmlspecialchars($profil['email']);
    $no_telp      = htmlspecialchars($profil['no_telp']);
    $alamat       = htmlspecialchars($profil['alamat']);
    $password     = mysqli_real_escape_string($db, $profil['password']);
    $password2    = mysqli_real_escape_string($db, $profil['password2']);
    $level        = htmlspecialchars($profil['level']);

    // Cek apakah username dan email masih tersedia
    $cek_email    = mysqli_query($db, "SELECT * FROM master WHERE email='$email'");
    $cek_username = mysqli_query($db, "SELECT * FROM master WHERE username='$username'");
    if (mysqli_num_rows($cek_email) > 0) {
        echo "
            <script>
				alert('Maaf, Email Sudah Terdaftar');
            </script>
        ";

        return false;
    } elseif (mysqli_num_rows($cek_username) > 0) {
        echo "
            <script>
				alert('Maaf, Username Sudah Terdaftar');
            </script>
        ";

        return false;
    }

    // cek kesamaan password & konfirmasi password
    if ($password !== $password2) {
        echo "
                <script>
                    alert('Konfirmasi password tidak sesuai');
                </script>
            ";

        return false;
    }
    // engkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO master VALUES (
            null,'$id_pelanggan','$nama','$email','$username','$no_telp','$alamat','$password', '$level'
    )";
    mysqli_query($db, $insert);

    return mysqli_affected_rows($db);
}

// update
function updateUser($profil)
{
    global $db;

    $id_user  = $profil['id_user'];
    $nama     = ucwords(htmlspecialchars($profil['nama']));
    $username = strtolower(htmlspecialchars($profil['username']));
    $email    = htmlspecialchars($profil['email']);
    $no_telp  = htmlspecialchars($profil['no_telp']);
    $alamat   = htmlspecialchars($profil['alamat']);
    $level    = $profil['level'];

    $profil = "UPDATE master SET
		nama 		    = '$nama',
		username        = '$username',
		email 	        = '$email',
		no_telp         = '$no_telp',
		alamat          = '$alamat',
		level           = '$level'
		WHERE id_user   = '$id_user'
	";

    mysqli_query($db, $profil);

    return mysqli_affected_rows($db);
}

/* END: User */

/* START: CRUD (Management karyawan) */
// create
function addKaryawan($karyawan)
{
    global $db;

    $id_kar   = trim('KRY-' . randomString(4));
    $nama     = ucwords(htmlspecialchars($karyawan['nama']));
    $email    = htmlspecialchars($karyawan['email']);
    $username = strtolower(htmlspecialchars($karyawan['username']));
    $no_telp  = htmlspecialchars($karyawan['no_telp']);
    $alamat   = htmlspecialchars($karyawan['alamat']);
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
    $insert   = "INSERT INTO master VALUES (
        null,'$id_kar','$nama','$email','$username','$no_telp','$alamat','$password','$level'
    )";
    mysqli_query($db, $insert);

    return mysqli_affected_rows($db);
}

// update
function updateKaryawan($up_kary)
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

    return mysqli_affected_rows($db);
}

// delete
function deleteKaryawan($id_karyawan)
{
    global $db;
    mysqli_query($db, "DELETE FROM master WHERE id_user = '$id_karyawan'");

    return mysqli_affected_rows($db);
}

/* END: CRUD (Management karyawan) */

/* START: CRUD Cuci Komplit */
// create
function addCk($data_ck)
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

    return mysqli_affected_rows($db);
}

// update
function updateCk($edit_ck)
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

    return mysqli_affected_rows($db);
}

// delete
function deleteCk($del_ck)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_cuci_komplit WHERE id_ck = '$del_ck'");

    return mysqli_affected_rows($db);
}

/* END: CRUD Cuci Komplit */

/* START: CRUD Dry Clean */
// create
function addDc($data_dc)
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

    return mysqli_affected_rows($db);
}

// update
function updateDc($edit_dc)
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

    return mysqli_affected_rows($db);
}

// delete
function deleteDc($del_dc)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_dry_clean WHERE id_dc = '$del_dc'");

    return mysqli_affected_rows($db);
}

/* END: CRUD Dry Clean */

/* START: CRUD Cuci Satuan */
// create
function addCs($data_cs)
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

    return mysqli_affected_rows($db);
}

// update
function updateCs($edit_cs)
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

    return mysqli_affected_rows($db);
}

// delete
function deleteCs($del_cs)
{
    global $db;
    mysqli_query($db, "DELETE FROM tb_cuci_satuan WHERE id_cs = '$del_cs'");

    return mysqli_affected_rows($db);
}

/* END: CRUD Cuci Satuan */

/* START: CRUD Order */
// Create Order Cuci Komplit
function orderCk($order_ck)
{
    global $db;

    $id_pel     = $order_ck['id_pelanggan_ck'];
    $nama_pel   = htmlspecialchars($order_ck['nama_pel_ck']);
    $no_telp    = htmlspecialchars($order_ck['no_telp_ck']);
    $alamat     = htmlspecialchars($order_ck['alamat_ck']);
    $jns_pkt    = htmlspecialchars($order_ck['jenis_paket_ck']);
    $berat_qty  = htmlspecialchars($order_ck['berat_qty_ck']);
    $tgl_masuk  = htmlspecialchars(formatDate($order_ck['tgl_masuk_ck']));
    $tgl_keluar = htmlspecialchars(formatDate($order_ck['tgl_keluar_ck']));
    $ket        = htmlspecialchars($order_ck['keterangan_ck']);

    // Ambil data id pelanggan dari tabel master
    $id_pel_ck = mysqli_query($db, "SELECT * FROM master WHERE id_pelanggan = '$id_pel'");
    if (mysqli_num_rows($id_pel_ck) === 1) {
        $result_ck = mysqli_fetch_assoc($id_pel_ck);

        $id_pel_ck = $result_ck['id_pelanggan'];
        $no_telp   = $result_ck['no_telp'];
        $alamat    = $result_ck['alamat'];
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
        $orderNum = 'CK-' . strtoupper($limitNum);
    }

    $insert_ck = "INSERT INTO tb_order_ck VALUES(
		null,'$orderNum',' $id_pel_ck','$nama_pel','$no_telp','$alamat', '$jns_pkt','$wkt_kerja_ck',
        '$berat_qty','$tarif_perkilo', '$tgl_masuk','$tgl_keluar','$total_bayar','$ket'
    )";

    mysqli_query($db, $insert_ck);

    return mysqli_affected_rows($db);
}

// Hapus Daftar Orderan Cuci Komplit
function delOrCk($or_numb_ck)
{
    global $db;
    $del_query_ck = "DELETE FROM tb_order_ck WHERE or_ck_number='$or_numb_ck'";
    mysqli_query($db, $del_query_ck);

    return mysqli_affected_rows($db);
}

// Create Order Dry Clean
function orderDc($order_dc)
{
    global $db;

    $id_pel      = $order_dc['id_pelanggan_dc'];
    $nama_pel_dc = htmlspecialchars($order_dc['nama_pel_dc']);
    $no_telp     = htmlspecialchars($order_dc['no_telp_dc']);
    $alamat_dc   = htmlspecialchars($order_dc['alamat_dc']);
    $jns_paket   = htmlspecialchars($order_dc['jenis_paket_dc']);
    $berat_dc    = htmlspecialchars($order_dc['berat_qty_dc']);
    $tgl_msk_dc  = htmlspecialchars(formatDate($order_dc['tgl_masuk_dc']));
    $tgl_kel_dc  = htmlspecialchars(formatDate($order_dc['tgl_keluar_dc']));
    $ket_dc      = htmlspecialchars($order_dc['keterangan_dc']);

    // Ambil data id pelanggan dari tabel master
    $id_pel_dc = mysqli_query($db, "SELECT * FROM master WHERE id_pelanggan = '$id_pel'");
    if (mysqli_num_rows($id_pel_dc) === 1) {
        $result_ck = mysqli_fetch_assoc($id_pel_dc);

        $id_pel_dc = $result_ck['id_pelanggan'];
        $no_telp   = $result_ck['no_telp'];
        $alamat_dc = $result_ck['alamat'];
    }

    // Ambil data dari tabel daftar paket cuci komplit
    $pkt_dc = mysqli_query($db, "SELECT * FROM tb_dry_clean WHERE nama_paket_dc = '$jns_paket'");

    if (mysqli_num_rows($pkt_dc) === 1) {
        $result_dc = mysqli_fetch_assoc($pkt_dc);

        $wkt_kerja_dc = $result_dc['waktu_kerja_dc'];
        $trf_dc       = $result_dc['tarif_dc'];
        $tot_bayar_dc = $result_dc['tarif_dc'] * $berat_dc;

        // Generate Nomor Order
        $no_dc       = uniqid();
        $limitNum    = substr($no_dc, 0, 7);
        $orderNum_dc = 'DC-' . strtoupper($limitNum);
    }

    $query_dc = "INSERT INTO tb_order_dc VALUES(
		null,'$orderNum_dc','$id_pel_dc','$nama_pel_dc','$no_telp','$alamat_dc','$jns_paket','$wkt_kerja_dc',
		'$berat_dc','$trf_dc','$tgl_msk_dc','$tgl_kel_dc','$tot_bayar_dc','$ket_dc'
	)";

    mysqli_query($db, $query_dc);

    return mysqli_affected_rows($db);

}

// Hapus Daftar Orderan Dry Clean
function delOrDc($or_numb_dc)
{
    global $db;
    $del_query_dc = "DELETE FROM tb_order_dc WHERE or_dc_number='$or_numb_dc'";
    mysqli_query($db, $del_query_dc);

    return mysqli_affected_rows($db);
}

// Create Order Cuci Satuan
function orderCs($order_cs)
{
    global $db;

    $id_pel       = $order_cs['id_pelanggan_dc'];
    $nama_pel_cs  = htmlspecialchars($order_cs['nama_pel_cs']);
    $no_telp_cs   = htmlspecialchars($order_cs['no_telp_cs']);
    $alamat_cs    = htmlspecialchars($order_cs['alamat_cs']);
    $jenis_pkt_cs = htmlspecialchars($order_cs['jenis_paket_cs']);
    $jml_pcs      = htmlspecialchars($order_cs['jml_pcs']);
    $tgl_msk_cs   = htmlspecialchars(formatDate($order_cs['tgl_masuk_cs']));
    $tgl_kel_cs   = htmlspecialchars(formatDate($order_cs['tgl_keluar_cs']));
    $ket_cs       = htmlspecialchars($order_cs['keterangan_cs']);

    // Ambil data id pelanggan dari tabel master
    $id_pel_cs = mysqli_query($db, "SELECT * FROM master WHERE id_pelanggan = '$id_pel'");
    if (mysqli_num_rows($id_pel_cs) === 1) {
        $result_ck = mysqli_fetch_assoc($id_pel_cs);

        $id_pel_cs  = $result_ck['id_pelanggan'];
        $no_telp_cs = $result_ck['no_telp'];
        $alamat_cs  = $result_ck['alamat'];
    }

    // Ambil data dari tabel daftar paket cuci komplit
    $pkt_cs = mysqli_query($db, "SELECT * FROM tb_cuci_satuan WHERE nama_cs = '$jenis_pkt_cs'");
    if (mysqli_num_rows($pkt_cs) === 1) {
        $result_cs = mysqli_fetch_assoc($pkt_cs);

        $wkt_krj_cs  = $result_cs['waktu_kerja_cs'];
        $trf_cs      = $result_cs['tarif_cs'];
        $totBayar_cs = $result_cs['tarif_cs'] * $jml_pcs;

        // Generate Nomor Order
        $noCs        = uniqid();
        $limitNo_cs  = substr($noCs, 0, 7);
        $orderNum_cs = 'CS-' . strtoupper($limitNo_cs);
    }

    $query_cs = "INSERT INTO tb_order_cs VALUES (
		null,'$orderNum_cs','$id_pel_cs','$nama_pel_cs','$no_telp_cs','$alamat_cs','$jenis_pkt_cs',
		'$wkt_krj_cs','$jml_pcs','$trf_cs','$tgl_msk_cs','$tgl_kel_cs','$totBayar_cs','$ket_cs'
	)";

    mysqli_query($db, $query_cs);

    return mysqli_affected_rows($db);
}

// Hapus Daftar Orderan Cuci Satuan
function delOrCs($or_numb_cs)
{
    global $db;
    $del_query_cs = "DELETE FROM tb_order_cs WHERE or_cs_number='$or_numb_cs'";
    mysqli_query($db, $del_query_cs);

    return mysqli_affected_rows($db);
}

/* END: CRUD Order */

/* START: Transaksi Bayar */
// transaksi cuci komplit
function transaksiCk($trans_ck)
{
    global $db;

    $id_pel        = htmlspecialchars($trans_ck['id_pel']);
    $or_number     = htmlspecialchars($trans_ck['or_number']);
    $pelanggan     = htmlspecialchars($trans_ck['pelanggan']);
    $no_telp       = htmlspecialchars($trans_ck['no_telp']);
    $alamat        = htmlspecialchars($trans_ck['alamat']);
    $jns_paket     = htmlspecialchars($trans_ck['j_paket']);
    $wkt_kerja     = htmlspecialchars($trans_ck['wkt_kerja']);
    $berat         = htmlspecialchars($trans_ck['berat']);
    $h_perkilo     = htmlspecialchars($trans_ck['h_perkilo']);
    $tgl_msk       = htmlspecialchars($trans_ck['tgl_msk']);
    $tgl_klr       = htmlspecialchars($trans_ck['tgl_klr']);
    $total         = htmlspecialchars($trans_ck['total']);
    $keterangan    = htmlspecialchars($trans_ck['keterangan']);
    $nominal_bayar = htmlspecialchars($trans_ck['nominal']);

    if ($nominal_bayar < $total) {
        echo "<script>
			alert('Nominal tidak mencukupi');
		</script>";

        return false;
    }

    // Menghitung kembalian
    if ($nominal_bayar > $total) {
        $kembalian = $nominal_bayar - $total;
        $status    = "Sukses";
    } else if ($nominal_bayar == $total) {
        $kembalian = 0;
        $status    = "Sukses";
    }

    $query_insert_ck = "INSERT INTO tb_riwayat_ck VALUES (
		null, '$or_number','$id_pel','$pelanggan','$no_telp','$alamat','$jns_paket','$wkt_kerja','$berat',
        '$h_perkilo','$tgl_msk','$tgl_klr','$total','$nominal_bayar','$kembalian','$status','$keterangan'
	)";

    mysqli_query($db, $query_insert_ck);

    return mysqli_affected_rows($db);
}

// transaksi cuci satuan
function transaksiCs($trans_cs)
{
    global $db;

    $id_pel        = htmlspecialchars($trans_cs['id_pel']);
    $or_number     = htmlspecialchars($trans_cs['or_number']);
    $pelanggan     = htmlspecialchars($trans_cs['pelanggan']);
    $no_telp       = htmlspecialchars($trans_cs['no_telp']);
    $alamat        = htmlspecialchars($trans_cs['alamat']);
    $jns_paket     = htmlspecialchars($trans_cs['j_paket']);
    $wkt_kerja     = htmlspecialchars($trans_cs['wkt_kerja']);
    $jml_pcs       = htmlspecialchars($trans_cs['jml_pcs']);
    $h_perpcs      = htmlspecialchars($trans_cs['h_perpcs']);
    $tgl_msk       = htmlspecialchars($trans_cs['tgl_msk']);
    $tgl_klr       = htmlspecialchars($trans_cs['tgl_klr']);
    $total         = htmlspecialchars($trans_cs['total']);
    $keterangan    = htmlspecialchars($trans_cs['keterangan']);
    $nominal_bayar = htmlspecialchars($trans_cs['nominal']);

    if ($nominal_bayar < $total) {
        echo "<script>
			alert('Nominal tidak mencukupi');
		</script>";

        return false;
    }

    // Menghitung kembalian
    if ($nominal_bayar > $total) {
        $kembalian = $nominal_bayar - $total;
        $status    = "Sukses";
    } else if ($nominal_bayar == $total) {
        $kembalian = 0;
        $status    = "Sukses";
    }

    $query_insert_cs = "INSERT INTO tb_riwayat_cs VALUES (
		null,'$or_number','$id_pel','$pelanggan','$no_telp','$alamat','$jns_paket','$wkt_kerja','$jml_pcs',
        '$h_perpcs','$tgl_msk','$tgl_klr','$total','$nominal_bayar','$kembalian','$status','$keterangan'
	)";

    mysqli_query($db, $query_insert_cs);

    return mysqli_affected_rows($db);

}

// transaksi dry clean
function transaksiDc($trans_dc)
{
    global $db;

    $id_pel        = htmlspecialchars($trans_dc['id_pel']);
    $or_number     = htmlspecialchars($trans_dc['or_number']);
    $pelanggan     = htmlspecialchars($trans_dc['pelanggan']);
    $no_telp       = htmlspecialchars($trans_dc['no_telp']);
    $alamat        = htmlspecialchars($trans_dc['alamat']);
    $jns_paket     = htmlspecialchars($trans_dc['j_paket']);
    $wkt_kerja     = htmlspecialchars($trans_dc['wkt_kerja']);
    $berat         = htmlspecialchars($trans_dc['berat']);
    $h_perkilo     = htmlspecialchars($trans_dc['h_perkilo']);
    $tgl_msk       = htmlspecialchars($trans_dc['tgl_msk']);
    $tgl_klr       = htmlspecialchars($trans_dc['tgl_klr']);
    $total         = htmlspecialchars($trans_dc['total']);
    $keterangan    = htmlspecialchars($trans_dc['keterangan']);
    $nominal_bayar = htmlspecialchars($trans_dc['nominal']);

    if ($nominal_bayar < $total) {
        echo "<script>
			alert('Nominal tidak mencukupi');
		</script>";

        return false;
    }

    // Menghitung kembalian
    if ($nominal_bayar > $total) {
        $kembalian = $nominal_bayar - $total;
        $status    = "Sukses";
    } else if ($nominal_bayar == $total) {
        $kembalian = 0;
        $status    = "Sukses";
    }

    $query_insert_dc = "INSERT INTO tb_riwayat_dc VALUES (
		null,'$or_number','$id_pel','$pelanggan','$no_telp','$alamat','$jns_paket','$wkt_kerja','$berat',
        '$h_perkilo','$tgl_msk','$tgl_klr','$total','$nominal_bayar','$kembalian','$status','$keterangan'
	)";

    mysqli_query($db, $query_insert_dc);

    return mysqli_affected_rows($db);
}

/* END: Transaksi Bayar */