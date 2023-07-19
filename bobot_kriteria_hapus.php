<?php
include 'config/app.php';
// menerima id_barang yang dipilih
$id_jurusan = (int)$_GET['id_jurusan'];

if (hapus_jurusan($id_jurusan) > 0) {
    echo "<script>
    alert('Data jurusan Berhasil dihapus');
    document.location.href = 'bobot_kriteria.php';
    </script>";
} else {
    echo "<script>
    alert('Data jurusan Gagal dihapus');
    document.location.href = 'bobot_kriteria.php';
    </script>";
}
