<?php
include 'config/db.php';

if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_kriteria = $_POST['id_kriteria'];
    $prodi = $_POST['prodi'];
    $kriteria = $_POST['kriteria'];
    $target = $_POST['target'];
    $tipe = $_POST['tipe'];

    // query ubah/update data
    $query = mysqli_query($konek, "UPDATE kriteria SET id_target = '$prodi', kriteria = '$kriteria', target = '$target', tipe = '$tipe' WHERE id_kriteria = '$id_kriteria'");

    if ($query) {
        echo "<script>
    alert('Data target Berhasil diUBAH!');
    document.location.href = 'kriteria.php';
    </script>";
    } else {
        echo "<script>
    alert('Data target Gagal diUBAH!');
    document.location.href = 'kriteria.php'
    </script>";
    }
}
