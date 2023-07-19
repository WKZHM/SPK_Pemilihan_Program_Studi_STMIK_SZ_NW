<?php
include 'config/app.php';
// menerima id_barang yang dipilih
$id_cmb = (int)$_GET['id_cmb'];

if (hapus_maba($id_cmb) > 0) {
    echo "<script>
    alert('Data MABA Berhasil dihapus😁');
    document.location.href = 'maba.php';
    </script>";
} else {
    echo "<script>
    alert('Data MABA Gagal dihapus😥');
    document.location.href = 'maba.php';
    </script>";
}
