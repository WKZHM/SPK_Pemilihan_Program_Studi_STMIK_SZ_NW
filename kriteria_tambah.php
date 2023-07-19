<?php
// title
$title = 'Tambah Data Kriteria';

// include header
include 'layout/header.php';

// Cek apakah tombol tambah ditekan berhasil atau tidak
if (isset($_POST['submit'])) {
    if (create_kriteria($_POST) > 0) {
        echo "<script>
        alert('Data Kriteria Berhasil ditambahkan!');
        document.location.href = 'kriteria.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Kriteria Gagal ditambahkan!');
        document.location.href = 'kriteria.php';
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
                    <h1>FORM TAMBAH DATA KRITERIA</h1>
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
                                <!-- Aspek -->
                                <div class="form-group">
                                    <label for="prodi">Aspek/Target</label>
                                    <select name="prodi" id="prodi" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">Program Studi</option>
                                        <?php
                                        $data_target = select("SELECT * FROM aspek;");
                                        ?>
                                        <?php foreach ($data_target as $dt) : ?>
                                            <option value="<?= $dt['id_target']; ?>"><?= $dt['prodi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- kriteria -->
                                <div class="form-group">
                                    <label for="kriteria">Kriteria</label>
                                    <input type="text" name="kriteria" class="form-control" id="kriteria" placeholder="Masukkan Kriteria" required>
                                </div>
                                <!-- Standar -->
                                <div class="form-group">
                                    <label for="target">Standar</label>
                                    <select name="target" id="target" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">-- Pilih --</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <!-- Type -->
                                <div class="form-group">
                                    <label for="tipe">Type</label>
                                    <select name="tipe" id="tipe" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="">Tipe</option>
                                        <option value="cf">Core Factor</option>
                                        <option value="sf">Secondary Factor</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <!-- submit -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button> |
                                <a href="kriteria.php" name="reset" class="btn btn-warning mr-1">Cencel</a>
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