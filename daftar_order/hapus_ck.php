<?php
require_once '../_header.php';
$ck_number = $_GET['or_ck_number'];

if (del_or_ck($ck_number) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location='http://dry_laundry.test';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location='http://dry_laundry.test';
        </script>
";
}
?>