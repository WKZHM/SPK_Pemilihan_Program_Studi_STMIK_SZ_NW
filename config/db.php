<!-- memanggil/menghubungkan database -->
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'db_spk';

$konek = mysqli_connect($host, $username, $password, $db);

// cek koneksi
// if (!$konek) {
//     echo "database tidak berhasil tehubung";
// } else {
//     echo "database berhasil terhubung";
// }

?>