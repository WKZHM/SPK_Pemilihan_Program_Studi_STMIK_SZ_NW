<?php
// title
$title = 'Tambah Data Mahasiswa Baru';

// include header
include 'layout/header.php';

// Cek apakah tombol tambah ditekan berhasil atau tidak
if (isset($_POST['submit'])) {
    if (create_maba($_POST) > 0) {
        echo "<script>
        alert('Data MABA Berhasil ditambahkan!');
        document.location.href = 'maba.php';
        </script>";
    } else {
        echo "<script>
        alert('Data MABA Gagal ditambahkan!');
        document.location.href = 'maba.php';
        </script>";
    }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FORM TAMBAH DATA MABA</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">

                            <div class="card-body">
                                <!-- No ujian -->
                                <div class="form-group">
                                    <label for="no_ujian">No Ujian</label>
                                    <input type="text" name="no_ujian" class="form-control" id="no_ujian" placeholder="Masukkan No Ujian" required>
                                </div>
                                <!-- nama -->
                                <div class="form-group">
                                    <label for="nama_cmb">Nama MABA</label>
                                    <input type="text" name="nama_cmb" class="form-control" id="nama_cmb" placeholder="Masukkan Nama" required>
                                </div>
                                <!-- tanggal lahir -->
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" style="width: 50%;" />
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- jenis kelamin -->
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <!-- alamat -->
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" required>
                                </div>
                                <!-- jurusan semasa SMA/SMK -->
                                <div class="form-group">
                                    <label for="jurusan">Jurusan Semasa SMA/SMK</label>
                                    <select name="jurusan" id="jurusan" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">Jurusan Semasa SMA/SMK</option>
                                        <?php
                                        $data_jurusan = select("SELECT * FROM bobot_jurusan;");
                                        ?>
                                        <?php foreach ($data_jurusan as $list) : ?>
                                            <option value="<?= $list['id_jurusan']; ?>"><?= $list['jurusan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- submit -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button> |
                                <a href="maba.php" name="reset" class="btn btn-warning mr-1">Cencel</a>
                            </div>
                        </form>
                        <!-- /.form -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
// include footer
include 'layout/footer.php';
?>