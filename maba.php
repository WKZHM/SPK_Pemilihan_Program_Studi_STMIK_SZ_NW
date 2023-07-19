<?php
// input title halaman
$title = 'Data Mahasiswa Baru';

// include dengan header
include 'layout/header.php';

// memanggil data cmb dan mengurutkannya dari data terlama ke terbaru
$data_cmb = select("SELECT * FROM cmb 
INNER JOIN bobot_jurusan ON cmb.id_jurusan=bobot_jurusan.id_jurusan");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mahasiswa Baru</h1>
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
                            <a href="maba_tambah.php" class="btn btn-primary mb-1"><i class="nav-icon far fa-plus-square"></i> Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Ujian</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Jurusan Semasa SMA/SMK</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_cmb as $cmb) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $cmb['no_ujian']; ?></td>
                                            <td><?= $cmb['nama_cmb']; ?></td>
                                            <td><?= $cmb['tgl_lahir']; ?></td>
                                            <td><?= $cmb['jk']; ?></td>
                                            <td><?= $cmb['alamat']; ?></td>
                                            <td><?= $cmb['jurusan']; ?></td>
                                            <td class="text-center">
                                                <!-- ubah -->
                                                <a href="maba_ubah.php?id_cmb=<?= $cmb['id_cmb']; ?>" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a> |
                                                <!-- hapus -->
                                                <a href="maba_hapus.php?id_cmb=<?= $cmb['id_cmb']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus!!')"><i class="nav-icon fas fa-trash"></i></a>
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