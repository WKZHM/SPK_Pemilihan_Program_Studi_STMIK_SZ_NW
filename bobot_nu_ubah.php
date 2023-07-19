<?php
include 'config/db.php';
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_nu = $_POST['id_nu'];
    $nilai_ujian = $_POST['nilai_ujian'];
    $bobot_nu = $_POST['bobot_nu'];

    // query ubah/update data
    $query = mysqli_query($konek, "UPDATE bobot_nilai SET nilai_ujian = '$nilai_ujian', bobot_nu = '$bobot_nu' WHERE id_nu = '$id_nu'");
    // Cek apakah tombol UBAH ditekan berhasil atau tidak

    if ($query) {
        echo "<script>
        alert('Data NIlai Ujian Berhasil diUBAH!');
        document.location.href = 'bobot_kriteria.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Nilai Ujian Gagal diUBAH!');
        
        </script>";
    }
}
