<?php
// title
$title = 'Ubah Data Aspek/Traget';

// include header
include 'layout/header.php';
// mengambil id_cmb dari database/url yang dipilih
$id_target = $_GET['id_target'];

// $target = select("SELECT * FROM aspek WHERE id_target = '$id_target'")[0];
$target = mysqli_query($konek, "SELECT * FROM aspek WHERE id_target = '$id_target'");
foreach ($target as $t) {
    $id_target = $t['id_target'];
    $prodi = $t['prodi'];
    $persentase = $t['persentase'];
    $cf = $t['cf'];
    $sf = $t['sf'];
}

// Cek apakah tombol UBAH ditekan berhasil atau tidak




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
                        <form action="aspek_ubah.php" method="post">

                            <div class="card-body">
                                <!-- id -->
                                <input type="text" name="id_target" value="<?= $id_target; ?>">
                                <!-- prodi -->
                                <div class="form-group">
                                    <label for="prodi">Program Studi/Target/Aspek</label>
                                    <input type="text" name="prodi" class="form-control" id="prodi" value="<?= $prodi; ?>" placeholder="Masukkan Aspek" required>
                                </div>
                                <!-- persentase -->
                                <div class="form-group">
                                    <label for="persentase">Persentase</label>
                                    <input type="text" name="persentase" class="form-control" id="persentase" value="<?= $persentase; ?>" placeholder="Masukkan Nilai" style="width: 30%;" required>
                                </div>
                                <!-- core factor -->
                                <div class="form-group">
                                    <label for="cf">Core Factor</label>
                                    <input type="text" name="cf" class="form-control" id="cf" value="<?= $cf; ?>" placeholder="Masukkan Nilai" style="width: 30%;" required>
                                </div>
                                <!-- secondary factor -->
                                <div class="form-group">
                                    <label for="sf">Secondary Factor</label>
                                    <input type="text" name="sf" class="form-control" id="sf" value="<?= $sf; ?>" placeholder="Masukkan Nilai" style="width: 30%;" required>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <!-- submit -->
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Ubah</button> |
                                <a href="target.php" name="reset" class="btn btn-warning mr-1">Cencel</a>
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