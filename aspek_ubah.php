<?php
include "config/db.php";
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_target = $_POST['id_target'];
    $prodi = $_POST['prodi'];
    $persentase = $_POST['persentase'];
    $cf = $_POST['cf'];
    $sf = $_POST['sf'];

    // query ubah/update data
    $query = mysqli_query($konek, "UPDATE aspek SET prodi = '$prodi', persentase = '$persentase', cf = '$cf', sf = '$sf' WHERE id_target = '$id_target'");


    if ($query) {
        echo "<script>
    alert('Data target Berhasil diUBAH!');
    document.location.href = 'target.php';
    </script>";
    } else {
        echo "<script>
    alert('Data target Gagal diUBAH!');
    document.location.href = 'target.php'
    </script>";
    }
}
