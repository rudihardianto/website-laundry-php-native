<?php 

$riwayat_ck = mysqli_query($db, "SELECT * FROM tb_riwayat_ck WHERE id_pelanggan =  '$_SESSION[id_pelanggan]'");
if (mysqli_num_rows($riwayat_ck) > 0) {
    $query_ck = mysqli_fetch_assoc($riwayat_ck);

    // set session
    $_SESSION['id_ck'] = $query_ck['id_ck'];
    $_SESSION['or_number'] = $query_ck['or_number'];
    $_SESSION['id_pelanggan'] = $query_ck['id_pelanggan'];
    $_SESSION['pelanggan'] = $query_ck['pelanggan'];;
    $_SESSION['no_telp'] = $query_ck['no_telp'];
    $_SESSION['alamat'] = $query_ck['alamat'];
    $_SESSION['j_paket'] = $query_ck['j_paket'];
    $_SESSION['wkt_kerja'] = $query_ck['wkt_kerja'];
    $_SESSION['berat'] = $query_ck['berat'];
    $_SESSION['h_perkilo'] = $query_ck['h_perkilo'];
    $_SESSION['tgl_msk'] = $query_ck['tgl_msk'];
    $_SESSION['tgl_klr'] = $query_ck['tgl_klr'];
    $_SESSION['total'] = $query_ck['total'];
    $_SESSION['nominal_byr'] = $query_ck['nominal_byr'];
    $_SESSION['kembalian'] = $query_ck['kembalian'];
    $_SESSION['status'] = $query_ck['status'];
    $_SESSION['keterangan'] = $query_ck['keterangan'];
    var_dump($riwayat_ck);
}

?>