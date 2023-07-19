<?php
// title
$title = 'Ubah Data Kriteria';

// include header
include 'layout/header.php';

// mengambil id_cmb dari database/url yang dipilih
$id_kriteria = $_GET['id_kriteria'];

$data_kriteria = mysqli_query($konek, "SELECT * FROM kriteria INNER JOIN aspek ON kriteria.id_target=aspek.id_target where id_kriteria='$id_kriteria'");
foreach ($data_kriteria as $dk) {
    $id_kriteria = $dk['id_kriteria'];
    $id_target = $dk['id_target'];
    $prodi = $dk['prodi'];
    $kriteria = $dk['kriteria'];
    $target = $dk['target'];
    $tipe = $dk['tipe'];
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FORM UBAH DATA KRITERIA</h1>
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
                            <h3 class="card-title">Form Ubah</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="kriteria_ubah_action.php" method="post">

                            <div class="card-body">
                                <input type="hidden" name="id_kriteria" value="<?= $id_kriteria; ?>">
                                <!-- Aspek -->
                                <div class="form-group">
                                    <label for="prodi">Aspek/Target</label>
                                    <select name="prodi" id="prodi" class="form-control select2bs4" style="width: 50%;" required>
                                        <option selected="selected" value="<?= $id_target; ?>"><?= $prodi; ?></option>
                                        <?php
                                        $data_target = select("SELECT * FROM aspek;");
                                        ?>
                                        <?php foreach ($data_target as $dt) : ?>
                                            <option value="<?= $dt['id_target']; ?>"><?= $dt['prodi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- nama -->
                                <div class="form-group">
                                    <label for="kriteria">Kriteria</label>
                                    <input type="text" name="kriteria" class="form-control" id="kriteria" placeholder="Masukkan Kriteria" value="<?= $kriteria; ?>" required>
                                </div>
                                <!-- Standar -->
                                <div class="form-group">
                                    <label for="target">Standar</label>
                                    <select name="target" id="target" class="form-control select2bs4" style="width: 50%;" required>
                                        <?= $target; ?>
                                        <option value="1" <?= $target == '1' ? 'selected' : null; ?>>1</option>
                                        <option value="2" <?= $target == '2' ? 'selected' : null; ?>>2</option>
                                        <option value="3" <?= $target == '3' ? 'selected' : null; ?>>3</option>
                                        <option value="4" <?= $target == '4' ? 'selected' : null; ?>>4</option>
                                        <option value="5" <?= $target == '5' ? 'selected' : null; ?>>5</option>
                                    </select>
                                </div>
                                <!-- Type -->
                                <div class="form-group">
                                    <label for="tipe">Type</label>
                                    <select name="tipe" id="tipe" class="form-control select2bs4" style="width: 50%;" required>
                                        <?= $tipe; ?>
                                        <option value="cf" <?= $tipe == 'cf' ? 'selected' : null; ?>>Core Factor</option>
                                        <option value="sf" <?= $tipe == 'sf' ? 'selected' : null; ?>>Secondary Factor</option>
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