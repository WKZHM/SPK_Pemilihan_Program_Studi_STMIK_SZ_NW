<?php
// title
$title = 'Input Nilai';

// include header
include 'layout/header.php';

// Cek apakah tombol tambah ditekan berhasil atau tidak
if (isset($_POST['submit'])) {
    if (create_sempel($_POST) > 0) {
        echo "<script>
        alert('Data nilai Berhasil ditambahkan!');
        document.location.href = 'profil.php';
        </script>";
    } else {
        echo "<script>
        alert('Data nilai Gagal ditambahkan!');
        document.location.href = 'profil_tambah.php';
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
                    <h1>FORM INPUT NILAI</h1>
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
                            <h3 class="card-title">Form Input</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">

                            <div class="card-body">
                                <!-- nama -->
                                <div class="form-group">
                                    <label for="nama_cmb">Nama</label>
                                    <select name="nama_cmb" id="nama_cmb" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">___Pilih MABA___</option>
                                        <?php
                                        $data_cmb = select("SELECT * FROM cmb;");
                                        ?>
                                        <?php foreach ($data_cmb as $dc) : ?>
                                            <option value="<?= $dc['id_cmb']; ?>"><?= $dc['nama_cmb']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- kriteria -->
                                <div class="form-group">
                                    <label for="kriteria">Kriteria</label>
                                    <select name="kriteria" id="kriteria" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">___Pilih Kriteria___</option>
                                        <?php
                                        $data_kriteria = select("SELECT * FROM kriteria;");
                                        ?>
                                        <?php foreach ($data_kriteria as $dk) : ?>
                                            <option value="<?= $dk['id_kriteria']; ?>"><?= $dk['kriteria']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- Nilai -->
                                <div class="form-group">
                                    <label for="value">Nilai</label>
                                    <select name="value" id="value" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">__Nilai Dalam Bentuk Bobot__</option>
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
                                <a href="profil.php" name="reset" class="btn btn-warning mr-1">Profile</a>
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