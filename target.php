<?php
// input title halaman
$title = 'Target/Aspek';

// include dengan header
include 'layout/header.php';

// memanggil data target dan mengurutkannya dari data terlama ke terbaru
$data_target = select('SELECT * FROM aspek ORDER BY id_target ASC');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Target/Aspek</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Program Studi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Program Studi</th>
                                        <th>Persentase (%)</th>
                                        <th>Core Factor (%)</th>
                                        <th>Secondary Factor (%)</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_target as $target) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $target['prodi']; ?></td>
                                            <td><?= $target['persentase']; ?></td>
                                            <td><?= $target['cf']; ?></td>
                                            <td><?= $target['sf']; ?></td>
                                            <td class="text-center">
                                                <!-- ubah -->
                                                <a href="target_ubah.php?id_target=<?= $target['id_target']; ?>" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a>
                                                <!-- hapus -->
                                                <!-- <a href="" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
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
// include dengan footer
include 'layout/footer.php';
?>