<?php
// input title halaman
$title = 'Nilai';

// include dengan header
include 'layout/header.php';

// memanggil nilai untuk kriteria C1-C5 (TI)
$data_sempel_ti = select("SELECT nama.id_cmb,nama.nama_cmb,pm.C1,pm.C2,pm.C3,pm.C4,pm.C5 
FROM cmb nama 
left JOIN (SELECT * FROM( select id_cmb,sum( if(id_kriteria=1,value,0) ) as 'C1',sum( if(id_kriteria=2,value,0) ) as 'C2',sum( if(id_kriteria=3,value,0) ) as 'C3',sum( if(id_kriteria=4,value,0) ) as 'C4',sum( if(id_kriteria=5,value,0) ) as 'C5' 
from sempel group by id_cmb)tbl) pm on nama.id_cmb =pm.id_cmb");

//memanggil nilai untuk C6-C10 (SI)
$data_sempel_si = select("SELECT nama.id_cmb,nama.nama_cmb,pm.C6,pm.C7,pm.C8,pm.C9,pm.C10 
FROM cmb nama 
left JOIN (SELECT * FROM( select id_cmb,sum( if(id_kriteria=6,value,0) ) as 'C6',sum( if(id_kriteria=7,value,0) ) as 'C7',sum( if(id_kriteria=8,value,0) ) as 'C8',sum( if(id_kriteria=9,value,0) ) as 'C9',sum( if(id_kriteria=10,value,0) ) as 'C10' 
from sempel group by id_cmb)tbl) pm on nama.id_cmb =pm.id_cmb");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nilai Tiap Aspek</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- tabel Nilai Teknik Informatika -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Teknik Informatika</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- tambah -->
                            <a href="profil_tambah.php" class="btn btn-primary mb-1"><i class="nav-icon far fa-plus-square"></i> Tambah</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_sempel_ti as $dst) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dst['nama_cmb']; ?></td>
                                            <td><?= $dst['C1']; ?></td>
                                            <td><?= $dst['C2']; ?></td>
                                            <td><?= $dst['C3']; ?></td>
                                            <td><?= $dst['C4']; ?></td>
                                            <td><?= $dst['C5']; ?></td>
                                            <!-- <td class="text-center"> -->
                                            <!-- ubah -->
                                            <!-- <a href="maba_ubah.php?id_cmb=<?= $cmb['id_cmb']; ?>" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a> | -->
                                            <!-- hapus -->
                                            <!-- <a href="maba_hapus.php?id_cmb=<?= $cmb['id_cmb']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus!!')"><i class="nav-icon fas fa-trash"></i></a> -->
                                            <!-- </td> -->
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel Nilai Sistem Informasi -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sistem Informasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- tambah -->
                            <a href="profil_tambah.php" class="btn btn-primary mb-1"><i class="nav-icon far fa-plus-square"></i> Tambah</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data_sempel_si as $dss) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dss['nama_cmb']; ?></td>
                                            <td><?= $dss['C6']; ?></td>
                                            <td><?= $dss['C7']; ?></td>
                                            <td><?= $dss['C8']; ?></td>
                                            <td><?= $dss['C9']; ?></td>
                                            <td><?= $dss['C10']; ?></td>
                                            <!-- <td class="text-center"> -->
                                            <!-- ubah -->
                                            <!-- <a href="maba_ubah.php?id_cmb=<?= $cmb['id_cmb']; ?>" class="btn btn-secondary btn-sm"><i class="nav-icon fas fa-pen"></i></a> | -->
                                            <!-- hapus -->
                                            <!-- <a href="maba_hapus.php?id_cmb=<?= $cmb['id_cmb']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus!!')"><i class="nav-icon fas fa-trash"></i></a> -->
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