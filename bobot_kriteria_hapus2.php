<?php
include 'config/app.php';
// menerima id_barang yang dipilih
$id_nu = (int)$_GET['id_nu'];

if (hapus_nu($id_nu) > 0) {
    echo "<script>
    alert('Data Nilai Berhasil dihapus');
    document.location.href = 'bobot_kriteria.php';
    </script>";
} else {
    echo "<script>
    alert('Data Nilai Gagal dihapus');
    document.location.href = 'bobot_kriteria.php';
    </script>";
}
