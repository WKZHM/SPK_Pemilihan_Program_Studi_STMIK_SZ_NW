<?php
include 'config/db.php';
session_start();
//apabila tombol login di klik akan menjalankan skript dibawah ini
if (isset($_REQUEST['login'])) {

    //mendeklarasikan data yang akan dimasukkan ke dalam database
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    //skript query ke insert data ke dalam database
    $sql = mysqli_query($konek, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    //jika skript query benar maka akan membuat session
    $cek = mysqli_num_rows($sql);
    if ($cek > 0) {

        list($id, $nama, $username, $email) = mysqli_fetch_array($sql);

        //membuat session

        $_SESSION['id'] = $id;
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        header("location: home.php");
        die();
    } else {

        $_SESSION['err'] = '<strong>ERROR!</strong> Username dan Password tidak ditemukan.';
        header('location: login.php');
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="dist/img/spk_pemilihan_prodi/logo_kampus.png" width="80" alt="">
                <p class="h6"><b>SISTEM PENDUKUNG KEPUTUSAN</b><br>Pemilihan Prodi</p>
            </div>

            <!-- pesan ketika username atau password salah -->
            <?php
            if (isset($_SESSION['err'])) {
                $err = $_SESSION['err'];
                echo '<div class="alert alert-warning alert-message">' . $err . '</div>';
                unset($_SESSION['err']);
            }
            ?>

            <div class="card-body">

                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                            <p class="text-center mt-3 mb-2 text-muted">Copyright &copy; WKZHM <?= date('Y'); ?></p>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script type="text/javascript">
        $(".alert-message").alert().delay(1000).slideUp('slow');
    </script>
</body>

</html>