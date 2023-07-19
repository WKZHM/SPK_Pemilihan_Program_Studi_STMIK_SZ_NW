<?php
include 'config/db.php';
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_jurusan = $_POST['id_jurusan'];
    $jurusan = $_POST['jurusan'];
    $bobot_j = $_POST['bobot_j'];

    // query ubah/update data
    $query = mysqli_query($konek, "UPDATE bobot_jurusan SET jurusan = '$jurusan', bobot_j = '$bobot_j' WHERE id_jurusan = '$id_jurusan'");
    // Cek apakah tombol UBAH ditekan berhasil atau tidak

    if ($query) {
        echo "<script>
        alert('Data jurusan Berhasil diUBAH!');
        document.location.href = 'bobot_kriteria.php';
        </script>";
    } else {
        echo "<script>
        alert('Data jurusan Gagal diUBAH!');
        document.location.href = 'bobot_kriteria.php';
        </script>";
    }
}
