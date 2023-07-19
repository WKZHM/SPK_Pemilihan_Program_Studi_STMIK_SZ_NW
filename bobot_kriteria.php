<?php
// input title halaman
$title = 'Bobot';

// include dengan header
include 'layout/header.php';

// memanggil data bobot jurusan dan mengurutkannya dari data terlama ke terbaru
$data_jurusan = select('SELECT * FROM bobot_jurusan ORDER BY id_jurusan ASC');

// memanggil data bobot nilai ujian dan mengurutkannya dari data terlama ke terbaru
$data_nilai = select('SELECT * FROM bobot_nilai ORDER BY id_nu ASC');

// menampilkan data bobot gap dari yang terlama ke terbaru
$data_gap = select('SELECT * FROM bobot_gap');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bobot Keterangan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- tabel bobot jurusan -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bobot Jurusan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- tombol tambah -->
                            <a href="bobot_kriteria_tambah.php" class="btn btn-primary mb-1"><i class="nav-icon far fa-plus-square"></i> Tambah</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Jurusan</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_jurusan as $bobot_jurusan) : ?>
                                        <tr>
                                            <td><?= $bobot_jurusan['jurusan']; ?></td>
                                            <td><?= $bobot_jurusan['bobot_j']; ?></td>
                                            <td class="text-center">
                                                <!-- ubah -->
                                                <a href="bobot_kriteria_ubah.php?id_jurusan=<?= $bobot_jurusan['id_jurusan']; ?>" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a> |
                                                <!-- hapus -->
                                                <a href="bobot_kriteria_hapus.php?id_jurusan=<?= $bobot_jurusan['id_jurusan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus!!')"><i class="nav-icon fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Jurusan</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- tabel bobot nilai -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bobot Nilai Ujian/Tes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nilai Ujian</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_nilai as $bobot_nilai) : ?>
                                        <tr>
                                            <td><?= $bobot_nilai['nilai_ujian']; ?></td>
                                            <td><?= $bobot_nilai['bobot_nu']; ?></td>
                                            <td class="text-center">
                                                <!-- ubah -->
                                                <a href="bobot_kriteria_ubah2.php?id_nu=<?= $bobot_nilai['id_nu']; ?>" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a> |
                                                <!-- hapus -->
                                                <a href="bobot_kriteria_hapus2.php?id_nu=<?= $bobot_nilai['id_nu']; ?>" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th>Nilai Ujian</th>
                                        <th>Bobot</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- bobot gap -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bobot Nilai Gap</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Selisih</th>
                                        <th>Bobot Gap</th>
                                        <th>Keterangan</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_gap as $bobot_gap) : ?>
                                        <tr>
                                            <td><?= $bobot_gap['selisih']; ?></td>
                                            <td><?= $bobot_gap['bobot_gap']; ?></td>
                                            <td><?= $bobot_gap['ket']; ?></td>
                                            <!-- <td class="text-center"> -->
                                            <!-- ubah -->
                                            <!-- <a href="" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a> | -->
                                            <!-- hapus -->
                                            <!-- <a href="" class="btn btn-danger btn-sm"><i class="nav-icon fas fa-trash"></i></a> -->
                                            <!-- </td> -->
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