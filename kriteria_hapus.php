<?php
include 'config/app.php';
// menerima id_barang yang dipilih
$id_kriteria = (int)$_GET['id_kriteria'];

if (hapus_kriteria($id_kriteria) > 0) {
    echo "<script>
    alert('Data kriteria Berhasil dihapus');
    document.location.href = 'kriteria.php';
    </script>";
} else {
    echo "<script>
    alert('Data kriteria Gagal dihapus');
    document.location.href = 'kriteria.php';
    </script>";
}
