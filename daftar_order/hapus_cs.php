<?php
require_once '../_header.php';

$cs_number = $_GET['or_cs_number'];

if (deleteCs($cs_number) > 0) {
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