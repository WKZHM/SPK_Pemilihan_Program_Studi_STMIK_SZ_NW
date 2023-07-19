<?php
$title = 'Perhitungan';

include 'layout/header.php';

$data_kriteria = select("SELECT * FROM kriteria GROUP BY id_target");
// memanggil nilai target
$target_1 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=1");
$target_2 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=2");
$target_3 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=3");
$target_4 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=4");
$target_5 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=5");
$target_6 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=6");
$target_7 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=7");
$target_8 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=8");
$target_9 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=9");
$target_10 = mysqli_query($konek, "select target as nilai from kriteria where id_kriteria=10");
$data_1 = mysqli_fetch_assoc($target_1);
$data_2 = mysqli_fetch_assoc($target_2);
$data_3 = mysqli_fetch_assoc($target_3);
$data_4 = mysqli_fetch_assoc($target_4);
$data_5 = mysqli_fetch_assoc($target_5);
$data_6 = mysqli_fetch_assoc($target_6);
$data_7 = mysqli_fetch_assoc($target_7);
$data_8 = mysqli_fetch_assoc($target_8);
$data_9 = mysqli_fetch_assoc($target_9);
$data_10 = mysqli_fetch_assoc($target_10);
$tr1 = $data_1['nilai'];
$tr2 = $data_2['nilai'];
$tr3 = $data_3['nilai'];
$tr4 = $data_4['nilai'];
$tr5 = $data_5['nilai'];
$tr6 = $data_6['nilai'];
$tr7 = $data_7['nilai'];
$tr8 = $data_8['nilai'];
$tr9 = $data_9['nilai'];
$tr10 = $data_10['nilai'];
// memanggil nilai faktor
$tipe_1 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=1");
$tipe_2 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=2");
$tipe_3 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=3");
$tipe_4 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=4");
$tipe_5 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=5");
$tipe_6 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=6");
$tipe_7 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=7");
$tipe_8 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=8");
$tipe_9 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=9");
$tipe_10 = mysqli_query($konek, "select tipe as nilai from kriteria where id_kriteria=10");
$dt_1 = mysqli_fetch_assoc($tipe_1);
$dt_2 = mysqli_fetch_assoc($tipe_2);
$dt_3 = mysqli_fetch_assoc($tipe_3);
$dt_4 = mysqli_fetch_assoc($tipe_4);
$dt_5 = mysqli_fetch_assoc($tipe_5);
$dt_6 = mysqli_fetch_assoc($tipe_6);
$dt_7 = mysqli_fetch_assoc($tipe_7);
$dt_8 = mysqli_fetch_assoc($tipe_8);
$dt_9 = mysqli_fetch_assoc($tipe_9);
$dt_10 = mysqli_fetch_assoc($tipe_10);
$tp1 = $dt_1['nilai'];
$tp2 = $dt_2['nilai'];
$tp3 = $dt_3['nilai'];
$tp4 = $dt_4['nilai'];
$tp5 = $dt_5['nilai'];
$tp6 = $dt_6['nilai'];
$tp7 = $dt_7['nilai'];
$tp8 = $dt_8['nilai'];
$tp9 = $dt_9['nilai'];
$tp10 = $dt_10['nilai'];

// memnaggil data aspek
$data_aspek = select("SELECT * FROM aspek");
// Core dan Secondary TI
$core_factor = mysqli_query($konek, "select cf as nilai from aspek where id_target=1");
$nilai_cf_ti = mysqli_fetch_assoc($core_factor);
$cf_ti = $nilai_cf_ti['nilai'];
$secondary_factor = mysqli_query($konek, "select sf as nilai from aspek where id_target=1");
$nilai_sf_ti = mysqli_fetch_assoc($secondary_factor);
$sf_ti = $nilai_sf_ti['nilai'];
// Core dan Secondary SI
$core_factor = mysqli_query($konek, "select cf as nilai from aspek where id_target=2");
$nilai_cf_si = mysqli_fetch_assoc($core_factor);
$cf_si = $nilai_cf_si['nilai'];
$secondary_factor = mysqli_query($konek, "select sf as nilai from aspek where id_target=2");
$nilai_sf_si = mysqli_fetch_assoc($secondary_factor);
$sf_si = $nilai_sf_si['nilai'];
// Persenntase TI dan SI
$persentase_ti = mysqli_query($konek, "select persentase as nilai from aspek where id_target=1");
$persentase_si = mysqli_query($konek, "select persentase as nilai from aspek where id_target=2");
$n_ti = mysqli_fetch_assoc($persentase_ti);
$n_si = mysqli_fetch_assoc($persentase_si);
$pti = $n_ti['nilai'];
$psi = $n_si['nilai'];



// memanggil nilai untuk kriteria C1-C5 (TI)
$data_sempel_ti = mysqli_query($konek, "SELECT nama.id_cmb,nama.nama_cmb,pm.C1,pm.C2,pm.C3,pm.C4,pm.C5 
FROM cmb nama 
left JOIN (SELECT * FROM( select id_cmb,sum( if(id_kriteria=1,value,0) ) as 'C1',sum( if(id_kriteria=2,value,0) ) as 'C2',sum( if(id_kriteria=3,value,0) ) as 'C3',sum( if(id_kriteria=4,value,0) ) as 'C4',sum( if(id_kriteria=5,value,0) ) as 'C5' 
from sempel group by id_cmb)tbl) pm on nama.id_cmb =pm.id_cmb");

//memanggil nilai untuk C6-C10 (SI)
$data_sempel_si = mysqli_query($konek, "SELECT nama.id_cmb,nama.nama_cmb,pm.C6,pm.C7,pm.C8,pm.C9,pm.C10 
FROM cmb nama 
left JOIN (SELECT * FROM( select id_cmb,sum( if(id_kriteria=6,value,0) ) as 'C6',sum( if(id_kriteria=7,value,0) ) as 'C7',sum( if(id_kriteria=8,value,0) ) as 'C8',sum( if(id_kriteria=9,value,0) ) as 'C9',sum( if(id_kriteria=10,value,0) ) as 'C10' 
from sempel group by id_cmb)tbl) pm on nama.id_cmb =pm.id_cmb");

// memanggil semua data
$data_hasil_akhir = mysqli_query($konek, "SELECT nama.id_cmb,nama.nama_cmb,pm.C1,pm.C2,pm.C3,pm.C4,pm.C5,pm.C6,pm.C7,pm.C8,pm.C9,pm.C10 FROM cmb nama left JOIN (SELECT * FROM( select id_cmb,sum( if(id_kriteria=1,value,0) ) as 'C1',sum( if(id_kriteria=2,value,0) ) as 'C2',sum( if(id_kriteria=3,value,0) ) as 'C3',sum( if(id_kriteria=4,value,0) ) as 'C4',sum( if(id_kriteria=5,value,0) ) as 'C5',sum( if(id_kriteria=6,value,0) ) as 'C6',sum( if(id_kriteria=7,value,0) ) as 'C7',sum( if(id_kriteria=8,value,0) ) as 'C8',sum( if(id_kriteria=9,value,0) ) as 'C9',sum( if(id_kriteria=10,value,0) ) as 'C10' from sempel group by id_cmb)tbl) pm on nama.id_cmb =pm.id_cmb");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>PERHITUNGAN PROFILE MATCHING</h1>
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
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Teknik Informatika</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
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
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>

                                    <tr>

                                        <th colspan="2" class="text-center">Standar Nilai</th>
                                        <td class="text-primary"><?= $tr1; ?></td>
                                        <td class="text-primary"><?= $tr2; ?></td>
                                        <td class="text-primary"><?= $tr3; ?></td>
                                        <td class="text-primary"><?= $tr4; ?></td>
                                        <td class="text-primary"><?= $tr5; ?></td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel pemetaan gap ti -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Pemetaan Gap TI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    if (mysqli_num_rows($data_sempel_ti) > 0) {
                                        foreach ($data_sempel_ti as $row) {
                                            $gap = array();

                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $row['nama_cmb']; ?></td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C1'] - $tr1; ?>

                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C2'] - $tr2; ?>
                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C3'] - $tr3; ?>
                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C4'] - $tr4; ?>
                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C5'] - $tr5; ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel pembobotan gap ti -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Pembobotan Nilai Gap TI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    if (mysqli_num_rows($data_sempel_ti) > 0) {
                                        foreach ($data_sempel_ti as $row) {
                                            $terbobot = array();

                                            $bobot1 = $row['C1'] - $tr1;
                                            $query1 = "select * from bobot_gap where selisih = " . $bobot1 . "";
                                            $sql1 = mysqli_query($konek, $query1);
                                            $row1 = mysqli_fetch_array($sql1);

                                            $bobot2 = $row['C2'] - $tr2;
                                            $query2 = "select * from bobot_gap where selisih = " . $bobot2 . "";
                                            $sql2 = mysqli_query($konek, $query2);
                                            $row2 = mysqli_fetch_array($sql2);

                                            $bobot3 = $row['C3'] - $tr3;
                                            $query3 = "select * from bobot_gap where selisih = " . $bobot3 . "";
                                            $sql3 = mysqli_query($konek, $query3);
                                            $row3 = mysqli_fetch_array($sql3);

                                            $bobot4 = $row['C4'] - $tr4;
                                            $query4 = "select * from bobot_gap where selisih = " . $bobot4 . "";
                                            $sql4 = mysqli_query($konek, $query4);
                                            $row4 = mysqli_fetch_array($sql4);

                                            $bobot5 = $row['C5'] - $tr5;
                                            $query5 = "select * from bobot_gap where selisih = " . $bobot5 . "";
                                            $sql5 = mysqli_query($konek, $query5);
                                            $row5 = mysqli_fetch_array($sql5);

                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $row['nama_cmb']; ?></td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row1['bobot_gap']; ?>

                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row2['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row3['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row4['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row5['bobot_gap']; ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel MENGHITUNG FAKTOR TI -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Hitung Faktor TI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>NCF</th>
                                        <th>NSF</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    if (mysqli_num_rows($data_sempel_ti) > 0) {
                                        foreach ($data_sempel_ti as $row) {
                                            $terbobot = array();

                                            $bobot1 = $row['C1'] - $tr1;
                                            $query1 = "select * from bobot_gap where selisih = " . $bobot1 . "";
                                            $sql1 = mysqli_query($konek, $query1);
                                            $row1 = mysqli_fetch_array($sql1);

                                            $bobot2 = $row['C2'] - $tr2;
                                            $query2 = "select * from bobot_gap where selisih = " . $bobot2 . "";
                                            $sql2 = mysqli_query($konek, $query2);
                                            $row2 = mysqli_fetch_array($sql2);

                                            $bobot3 = $row['C3'] - $tr3;
                                            $query3 = "select * from bobot_gap where selisih = " . $bobot3 . "";
                                            $sql3 = mysqli_query($konek, $query3);
                                            $row3 = mysqli_fetch_array($sql3);

                                            $bobot4 = $row['C4'] - $tr4;
                                            $query4 = "select * from bobot_gap where selisih = " . $bobot4 . "";
                                            $sql4 = mysqli_query($konek, $query4);
                                            $row4 = mysqli_fetch_array($sql4);

                                            $bobot5 = $row['C5'] - $tr5;
                                            $query5 = "select * from bobot_gap where selisih = " . $bobot5 . "";
                                            $sql5 = mysqli_query($konek, $query5);
                                            $row5 = mysqli_fetch_array($sql5);

                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $row['nama_cmb']; ?></td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row1['bobot_gap']; ?>

                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row2['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row3['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row4['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row5['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <!-- NCF -->
                                                    <?php
                                                    $terbobot[$row['id_cmb']] = ($row1['bobot_gap'] + $row3['bobot_gap'] + $row4['bobot_gap']) / 3;
                                                    $pembulatan_ncf_ti = number_format($terbobot[$row['id_cmb']], 2);
                                                    echo $pembulatan_ncf_ti;
                                                    ?>
                                                </td>
                                                <td>
                                                    <!-- NSF -->
                                                    <?php
                                                    $terbobot[$row['id_cmb']] = ($row2['bobot_gap'] + $row5['bobot_gap']) / 2;
                                                    $pembulatan_nsf_ti = number_format($terbobot[$row['id_cmb']], 2);
                                                    echo $pembulatan_nsf_ti;
                                                    ?>
                                                </td>
                                                <td class="text-primary">
                                                    <?php
                                                    // hitung total
                                                    $terbobot[$row['id_cmb']] = ((($row1['bobot_gap'] + $row3['bobot_gap'] + $row4['bobot_gap']) / 3) * ($cf_ti / 100)) + ((($row2['bobot_gap'] + $row5['bobot_gap']) / 2) * ($sf_ti / 100));
                                                    $pembulatan_total_ti = number_format($terbobot[$row['id_cmb']], 2);
                                                    // panggil total
                                                    echo $pembulatan_total_ti;
                                                    ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>

                                    <tr>

                                        <th colspan="2" class="text-center">Factor</th>
                                        <td class="text-primary"><?= $tp1; ?></td>
                                        <td class="text-primary"><?= $tp2; ?></td>
                                        <td class="text-primary"><?= $tp3; ?></td>
                                        <td class="text-primary"><?= $tp4; ?></td>
                                        <td class="text-primary"><?= $tp5; ?></td>
                                        <td class="text-primary">(C1+C3+C4)/3</td>
                                        <td class="text-primary">(C2+C5)/2</td>
                                        <td class="text-primary">(NCFx60%)+(NSFx40%)</td>
                                    </tr>

                                </tfoot>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel Nilai Sistem Informasi -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Sistem Informasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
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
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>

                                    <tr>

                                        <th colspan="2" class="text-center">Standar Nilai</th>
                                        <td class="text-primary"><?= $tr6; ?></td>
                                        <td class="text-primary"><?= $tr7; ?></td>
                                        <td class="text-primary"><?= $tr8; ?></td>
                                        <td class="text-primary"><?= $tr9; ?></td>
                                        <td class="text-primary"><?= $tr10; ?></td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel pemetaan gap SI -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Pemetaan Gap SI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    if (mysqli_num_rows($data_sempel_si) > 0) {
                                        foreach ($data_sempel_si as $row) {
                                            $gap = array();

                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $row['nama_cmb']; ?></td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C6'] - $tr6; ?>

                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C7'] - $tr7; ?>
                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C8'] - $tr8; ?>
                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C9'] - $tr9; ?>
                                                </td>
                                                <td>
                                                    <?php echo $gap[$row['id_cmb']] = $row['C10'] - $tr10; ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel pembobotan gap si -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Pembobotan Nilai Gap SI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    if (mysqli_num_rows($data_sempel_si) > 0) {
                                        foreach ($data_sempel_si as $row) {
                                            $terbobot = array();

                                            $bobot6 = $row['C6'] - $tr6;
                                            $query6 = "select * from bobot_gap where selisih = " . $bobot6 . "";
                                            $sql6 = mysqli_query($konek, $query6);
                                            $row6 = mysqli_fetch_array($sql6);

                                            $bobot7 = $row['C7'] - $tr7;
                                            $query7 = "select * from bobot_gap where selisih = " . $bobot7 . "";
                                            $sql7 = mysqli_query($konek, $query7);
                                            $row7 = mysqli_fetch_array($sql7);

                                            $bobot8 = $row['C8'] - $tr8;
                                            $query8 = "select * from bobot_gap where selisih = " . $bobot8 . "";
                                            $sql8 = mysqli_query($konek, $query8);
                                            $row8 = mysqli_fetch_array($sql8);

                                            $bobot9 = $row['C9'] - $tr9;
                                            $query9 = "select * from bobot_gap where selisih = " . $bobot9 . "";
                                            $sql9 = mysqli_query($konek, $query9);
                                            $row9 = mysqli_fetch_array($sql9);

                                            $bobot10 = $row['C10'] - $tr10;
                                            $query10 = "select * from bobot_gap where selisih = " . $bobot10 . "";
                                            $sql10 = mysqli_query($konek, $query10);
                                            $row10 = mysqli_fetch_array($sql10);

                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $row['nama_cmb']; ?></td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row6['bobot_gap']; ?>

                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row7['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row8['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row9['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row10['bobot_gap']; ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel MENGHITUNG FAKTOR SI -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">Hitung Faktor SI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <th>NCF</th>
                                        <th>NSF</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    if (mysqli_num_rows($data_sempel_si) > 0) {
                                        foreach ($data_sempel_si as $row) {
                                            $terbobot = array();

                                            $bobot6 = $row['C6'] - $tr6;
                                            $query6 = "select * from bobot_gap where selisih = " . $bobot6 . "";
                                            $sql6 = mysqli_query($konek, $query6);
                                            $row6 = mysqli_fetch_array($sql6);

                                            $bobot7 = $row['C7'] - $tr7;
                                            $query7 = "select * from bobot_gap where selisih = " . $bobot7 . "";
                                            $sql7 = mysqli_query($konek, $query7);
                                            $row7 = mysqli_fetch_array($sql7);

                                            $bobot8 = $row['C8'] - $tr8;
                                            $query8 = "select * from bobot_gap where selisih = " . $bobot8 . "";
                                            $sql8 = mysqli_query($konek, $query8);
                                            $row8 = mysqli_fetch_array($sql8);

                                            $bobot9 = $row['C9'] - $tr9;
                                            $query9 = "select * from bobot_gap where selisih = " . $bobot9 . "";
                                            $sql9 = mysqli_query($konek, $query9);
                                            $row9 = mysqli_fetch_array($sql9);

                                            $bobot10 = $row['C10'] - $tr10;
                                            $query10 = "select * from bobot_gap where selisih = " . $bobot10 . "";
                                            $sql10 = mysqli_query($konek, $query10);
                                            $row10 = mysqli_fetch_array($sql10);

                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $row['nama_cmb']; ?></td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row6['bobot_gap']; ?>

                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row7['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row8['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row9['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $terbobot[$row['id_cmb']] = $row10['bobot_gap']; ?>
                                                </td>
                                                <td>
                                                    <!-- NCF -->
                                                    <?php
                                                    $terbobot[$row['id_cmb']] = ($row6['bobot_gap'] + $row8['bobot_gap'] + $row9['bobot_gap']) / 3;
                                                    $pembulatan_ncf_si = number_format($terbobot[$row['id_cmb']], 2);
                                                    echo $pembulatan_ncf_si;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $terbobot[$row['id_cmb']] = ($row7['bobot_gap'] + $row10['bobot_gap']) / 2;
                                                    $pembulatan_nsf_si = number_format($terbobot[$row['id_cmb']], 2);
                                                    echo $pembulatan_nsf_si;
                                                    ?>
                                                </td>
                                                <td class="text-primary">
                                                    <?php
                                                    //perhitugan total
                                                    $terbobot[$row['id_cmb']] = ((($row6['bobot_gap'] + $row8['bobot_gap'] + $row9['bobot_gap']) / 3) * ($cf_ti / 100)) + ((($row7['bobot_gap'] + $row10['bobot_gap']) / 2) * ($sf_ti / 100));
                                                    $pembulatan_total_si = number_format($terbobot[$row['id_cmb']], 2);
                                                    //cetak total
                                                    echo $pembulatan_total_si;
                                                    ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>

                                    <tr>

                                        <th colspan="2" class="text-center">Factor</th>
                                        <td class="text-primary"><?= $tp6; ?></td>
                                        <td class="text-primary"><?= $tp7; ?></td>
                                        <td class="text-primary"><?= $tp8; ?></td>
                                        <td class="text-primary"><?= $tp9; ?></td>
                                        <td class="text-primary"><?= $tp10; ?></td>
                                        <td class="text-primary">(C1+C3+C4)/3</td>
                                        <td class="text-primary">(C2+C5)/2</td>
                                        <td class="text-primary">(NCFx60%)+(NSFx40%)</td>
                                    </tr>

                                </tfoot>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- tabel HASIL AKHIR -->
                    <div class="card">
                        <div class="card-header" style="background-color: darkkhaki;">
                            <h3 class="card-title">HASIL AKHIR</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama MABA</th>
                                        <th>Prodi Teknik Informatika</th>
                                        <th>Prodi Sistem Informasi</th>
                                        <th>Hasil Akhir</th>
                                        <th>Rekomendasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;
                                    if (mysqli_num_rows($data_hasil_akhir) > 0) {
                                        foreach ($data_hasil_akhir as $row) {
                                            $terbobot1 = array();
                                            $terbobot2 = array();
                                            $terbobot_total = array();

                                            $bobot1 = $row['C1'] - $tr1;
                                            $query1 = "select * from bobot_gap where selisih = " . $bobot1 . "";
                                            $sql1 = mysqli_query($konek, $query1);
                                            $row1 = mysqli_fetch_array($sql1);

                                            $bobot2 = $row['C2'] - $tr2;
                                            $query2 = "select * from bobot_gap where selisih = " . $bobot2 . "";
                                            $sql2 = mysqli_query($konek, $query2);
                                            $row2 = mysqli_fetch_array($sql2);

                                            $bobot3 = $row['C3'] - $tr3;
                                            $query3 = "select * from bobot_gap where selisih = " . $bobot3 . "";
                                            $sql3 = mysqli_query($konek, $query3);
                                            $row3 = mysqli_fetch_array($sql3);

                                            $bobot4 = $row['C4'] - $tr4;
                                            $query4 = "select * from bobot_gap where selisih = " . $bobot4 . "";
                                            $sql4 = mysqli_query($konek, $query4);
                                            $row4 = mysqli_fetch_array($sql4);

                                            $bobot5 = $row['C5'] - $tr5;
                                            $query5 = "select * from bobot_gap where selisih = " . $bobot5 . "";
                                            $sql5 = mysqli_query($konek, $query5);
                                            $row5 = mysqli_fetch_array($sql5);

                                            $bobot6 = $row['C6'] - $tr6;
                                            $query6 = "select * from bobot_gap where selisih = " . $bobot6 . "";
                                            $sql6 = mysqli_query($konek, $query6);
                                            $row6 = mysqli_fetch_array($sql6);

                                            $bobot7 = $row['C7'] - $tr7;
                                            $query7 = "select * from bobot_gap where selisih = " . $bobot7 . "";
                                            $sql7 = mysqli_query($konek, $query7);
                                            $row7 = mysqli_fetch_array($sql7);

                                            $bobot8 = $row['C8'] - $tr8;
                                            $query8 = "select * from bobot_gap where selisih = " . $bobot8 . "";
                                            $sql8 = mysqli_query($konek, $query8);
                                            $row8 = mysqli_fetch_array($sql8);

                                            $bobot9 = $row['C9'] - $tr9;
                                            $query9 = "select * from bobot_gap where selisih = " . $bobot9 . "";
                                            $sql9 = mysqli_query($konek, $query9);
                                            $row9 = mysqli_fetch_array($sql9);

                                            $bobot10 = $row['C10'] - $tr10;
                                            $query10 = "select * from bobot_gap where selisih = " . $bobot10 . "";
                                            $sql10 = mysqli_query($konek, $query10);
                                            $row10 = mysqli_fetch_array($sql10);

                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?php echo $row['nama_cmb']; ?></td>
                                                <td>
                                                    <?php
                                                    // hitung total
                                                    $terbobot1[$row['id_cmb']] = ((($row1['bobot_gap'] + $row3['bobot_gap'] + $row4['bobot_gap']) / 3) * ($cf_ti / 100)) + ((($row2['bobot_gap'] + $row5['bobot_gap']) / 2) * ($sf_ti / 100));
                                                    $pembulatan_ti = number_format($terbobot1[$row['id_cmb']], 2);
                                                    // panggil total
                                                    echo $pembulatan_ti;
                                                    ?>

                                                </td>
                                                <td>
                                                    <?php
                                                    //perhitugan total
                                                    $terbobot2[$row['id_cmb']] = ((($row6['bobot_gap'] + $row8['bobot_gap'] + $row9['bobot_gap']) / 3) * ($cf_ti / 100)) + ((($row7['bobot_gap'] + $row10['bobot_gap']) / 2) * ($sf_ti / 100));
                                                    $pembulatan_si = number_format($terbobot2[$row['id_cmb']], 2);
                                                    //cetak total
                                                    echo $pembulatan_si;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    // Perhitungan Nilai Akhir
                                                    $terbobot_total[$row['id_cmb']] = (($terbobot1[$row['id_cmb']]) * ($pti / 100)) + (($terbobot2[$row['id_cmb']]) * ($psi / 100));
                                                    $ranking = number_format($terbobot_total[$row['id_cmb']], 2);
                                                    // Cetak Hasil
                                                    echo $ranking;
                                                    ?>
                                                </td>
                                                <td>
                                                    <!-- rekomendasi -->
                                                    <?php
                                                    if ($terbobot_total[$row['id_cmb']] >= 4.0) {
                                                        echo "Teknik Informatika";
                                                    } else {
                                                        echo "Sistem Informasi";
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cetak.php?id_cmb=<?= $row['id_cmb']; ?>" class="btn btn-primary btn-sm" target="_blank"><i class="nav-icon fas fa-print"></i></a>
                                                </td>

                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-primary">No</td>
                                        <td class="text-primary">Persentase</td>
                                        <td class="text-primary"><?= $pti; ?>%</td>
                                        <td class="text-primary"><?= $psi; ?>%</td>
                                        <td class="text-primary">(NTtix60%)+(NTsix40%)</td>
                                        <td class="text-primary">Rekomendasi</td>
                                        <td class="text-primary">Aksi</td>

                                    </tr>
                                </tfoot>
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
include 'layout/footer.php';
?>