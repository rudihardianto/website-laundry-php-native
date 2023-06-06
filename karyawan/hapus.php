<?php
require_once '../_header.php';
$id_user = $_GET['id_user'];

if (delete_karyawan($id_user) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/karyawan/index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://localhost/laundry_rizal_skripsi/karyawan/index.php';
        </script>
";
}
?>