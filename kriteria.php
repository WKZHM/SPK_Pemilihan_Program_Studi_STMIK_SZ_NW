<?php
// input title halaman
$title = 'Data Kriteria';

// include dengan header
include 'layout/header.php';

// memanggil data cmb dan mengurutkannya dari data terlama ke terbaru
$kriteria = select("SELECT * FROM kriteria 
INNER JOIN aspek ON kriteria.id_target=aspek.id_target");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kriteria</h1>
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
                            <a href="kriteria_tambah.php" class="btn btn-primary mb-1"><i class="nav-icon far fa-plus-square"></i> Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aspek/Target</th>
                                        <th>Kriteria</th>
                                        <th>Standar</th>
                                        <th>Type</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($kriteria as $k) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $k['prodi']; ?></td>
                                            <td><?= $k['kriteria']; ?></td>
                                            <td><?= $k['target']; ?></td>
                                            <td><?= $k['tipe']; ?></td>
                                            <td class="text-center">
                                                <!-- ubah -->
                                                <a href="kriteria_ubah.php?id_kriteria=<?= $k['id_kriteria']; ?>" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a> |
                                                <!-- hapus -->
                                                <a href="kriteria_hapus.php?id_kriteria=<?= $k['id_kriteria']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus!!')"><i class="nav-icon fas fa-trash"></i></a>
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