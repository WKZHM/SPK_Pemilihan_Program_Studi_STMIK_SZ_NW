<?php
// title
$title = 'Tambah Data Kriteria Jurusan';

// include header
include 'layout/header.php';

// Cek apakah tombol tambah ditekan berhasil atau tidak
if (isset($_POST['submit'])) {
    if (create_jurusan($_POST) > 0) {
        echo "<script>
        alert('Data jurusan Berhasil ditambahkan!');
        document.location.href = 'bobot_kriteria.php';
        </script>";
    } else {
        echo "<script>
        alert('Data jurusan Gagal ditambahkan!');
        document.location.href = 'bobot_kriteria.php';
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
                    <h1>FORM TAMBAH KRITERIA JURUSAN</h1>
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
                                <!-- jurusan -->
                                <div class="form-group">
                                    <label for="jurusan">JURUSAN</label>
                                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" required>
                                </div>
                                <!-- bobot jurusan -->
                                <div class="form-group">
                                    <label for="bobot_j">Nilai Bobot Kriteria</label>
                                    <select name="bobot_j" id="bobot_j" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">-- Pilih --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
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