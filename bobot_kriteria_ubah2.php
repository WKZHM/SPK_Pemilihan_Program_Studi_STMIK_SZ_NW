<?php
// title
$title = 'Ubah Data Jurusan';

// include header
include 'layout/header.php';

// mengambil id_cmb dari database/url yang dipilih
$id_nu = $_GET['id_nu'];

//$data_jurusan = select("SELECT * FROM bobot_jurusan WHERE id_jurusan = $id_jurusan")[0];
$data_nilai = mysqli_query($konek, "SELECT * FROM bobot_nilai WHERE id_nu = '$id_nu'");
foreach ($data_nilai as $dn) {
    $id_nu = $dn['id_nu'];
    $nilai_ujian = $dn['nilai_ujian'];
    $bobot_nu = $dn['bobot_nu'];
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FORM UBAH DATA TARGET</h1>
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
                            <h3 class="card-title">Form UBAH</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="bobot_nu_ubah.php" method="post">

                            <div class="card-body">
                                <!-- id -->
                                <input type="hidden" name="id_nu" value="<?= $id_nu; ?>">
                                <!-- Nilai Ujian -->
                                <div class="form-group">
                                    <label for="nilai ujian">JURUSAN</label>
                                    <input type="text" name="nilai_ujian" class="form-control" id="nilai_ujian" placeholder="Masukkan Nilai" value="<?= $nilai_ujian; ?>" required>
                                </div>
                                <!-- Bobot Nilai Ujian -->
                                <div class="form-group">
                                    <label for="bobot_nu">Nilai Bobot Kriteria</label>
                                    <select name="bobot_nu" id="bobot_nu" class="form-control select2bs4" style="width: 50%;" required>
                                        <?= $bobot_nu; ?>
                                        <option value="1" <?= $bobot_nu == '1' ? 'selected' : null; ?>>1</option>
                                        <option value="2" <?= $bobot_nu == '2' ? 'selected' : null; ?>>2</option>
                                        <option value="3" <?= $bobot_nu == '3' ? 'selected' : null; ?>>3</option>
                                        <option value="4" <?= $bobot_nu == '4' ? 'selected' : null; ?>>4</option>
                                        <option value="5" <?= $bobot_nu == '5' ? 'selected' : null; ?>>5</option>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <!-- submit -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Ubah</button> |
                                <a href="bobot_kriteria.php" name="reset" class="btn btn-warning mr-1">Cencel</a>
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