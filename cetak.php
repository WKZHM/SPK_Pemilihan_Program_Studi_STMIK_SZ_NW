<?php
// input title halaman
$title = 'Cetak';

// include dengan header
include 'config/db.php';
$row = $_GET['id_cmb'];


$data_rek = mysqli_query($konek, "SELECT nama.id_cmb,nama.no_ujian,nama.nama_cmb,nama.tgl_lahir,nama.jk,nama.alamat,pm.C1,pm.C2,pm.C3,pm.C4,pm.C5,pm.C6,pm.C7,pm.C8,pm.C9,pm.C10 FROM cmb nama left JOIN (SELECT * FROM( select id_cmb,sum( if(id_kriteria=1,value,0) ) as 'C1',sum( if(id_kriteria=2,value,0) ) as 'C2',sum( if(id_kriteria=3,value,0) ) as 'C3',sum( if(id_kriteria=4,value,0) ) as 'C4',sum( if(id_kriteria=5,value,0) ) as 'C5',sum( if(id_kriteria=6,value,0) ) as 'C6',sum( if(id_kriteria=7,value,0) ) as 'C7',sum( if(id_kriteria=8,value,0) ) as 'C8',sum( if(id_kriteria=9,value,0) ) as 'C9',sum( if(id_kriteria=10,value,0) ) as 'C10' from sempel group by id_cmb)tbl) pm on nama.id_cmb =pm.id_cmb WHERE pm.id_cmb=$row");

$data_kriteria = mysqli_query($konek, "SELECT * FROM kriteria GROUP BY id_target");
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
$data_aspek = mysqli_query($konek, "SELECT * FROM aspek");
$core_factor = mysqli_query($konek, "select cf as nilai from aspek where id_target=1");
$nilai_cf_ti = mysqli_fetch_assoc($core_factor);
$cf_ti = $nilai_cf_ti['nilai'];
$secondary_factor = mysqli_query($konek, "select sf as nilai from aspek where id_target=1");
$nilai_sf_ti = mysqli_fetch_assoc($secondary_factor);
$sf_ti = $nilai_sf_ti['nilai'];

$core_factor = mysqli_query($konek, "select cf as nilai from aspek where id_target=2");
$nilai_cf_ti = mysqli_fetch_assoc($core_factor);
$cf_ti = $nilai_cf_ti['nilai'];
$secondary_factor = mysqli_query($konek, "select sf as nilai from aspek where id_target=2");
$nilai_sf_ti = mysqli_fetch_assoc($secondary_factor);
$sf_ti = $nilai_sf_ti['nilai'];

$persentase_ti = mysqli_query($konek, "select persentase as nilai from aspek where id_target=1");
$persentase_si = mysqli_query($konek, "select persentase as nilai from aspek where id_target=2");
$n_ti = mysqli_fetch_assoc($persentase_ti);
$n_si = mysqli_fetch_assoc($persentase_si);
$pti = $n_ti['nilai'];
$psi = $n_si['nilai'];

// perhitugan
if (mysqli_num_rows($data_rek) > 0) {
    foreach ($data_rek as $row) {
        $no_ujian = $row['no_ujian'];
        $nama_cmb = $row['nama_cmb'];
        $tgl_lahir = $row['tgl_lahir'];
        $jk = $row['jk'];
        $alamat = $row['alamat'];

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
    }
}
$terbobot1[$row['id_cmb']] = ((($row1['bobot_gap'] + $row3['bobot_gap'] + $row4['bobot_gap']) / 3) * ($cf_ti / 100)) + ((($row2['bobot_gap'] + $row5['bobot_gap']) / 2) * ($sf_ti / 100));
$terbobot2[$row['id_cmb']] = ((($row6['bobot_gap'] + $row8['bobot_gap'] + $row9['bobot_gap']) / 3) * ($cf_ti / 100)) + ((($row7['bobot_gap'] + $row10['bobot_gap']) / 2) * ($sf_ti / 100));
$terbobot_total[$row['id_cmb']] = (($terbobot1[$row['id_cmb']]) * ($pti / 100)) + (($terbobot2[$row['id_cmb']]) * ($psi / 100));
?>
<!-- isi -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .krs_box {
            border: 1px solid #000;
        }

        .krs_box * {
            text-align: center;
            padding: 0 1px;
        }

        .krs_box td,
        .krs_box th {
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }

        .krs_box th {
            font-size: 12px;
        }

        .tl {
            text-align: left;
            padding-left: 10px
        }

        .tc {
            text-align: center;
        }

        .tr {
            text-align: right;
        }

        .tj {
            text-align: justify;
        }

        .fb {
            font-weight: bold;
        }

        .line {
            border-bottom: 1px dashed #000;
            clear: both;
        }


        #cek {
            position: absolute;

        }

        #foto {
            width: 100px;
            left: 0px;
            top: 0px;
            z-index: 1;

        }

        #cek {
            width: 100px;
            right: 27%;
            top: 300px;

            z-index: 3;
        }
    </style>
</head>

<body cz-shortcut-listen="true">
    <div style="margin:0 auto;width:800px;">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="cetak">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- bagian kop -->
                            <table align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td><img src="dist/img/spk_pemilihan_prodi/logo_kampus.png" height="80" alt=""></td>
                                    <td width="800" style="font-weight:bold;text-align:center;">
                                        <div style="font-size:18px;font-family:Times New Roman,Times,serif">SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER</div>
                                        <div style="font-size:18px;font-family:Times New Roman,Times,serif">(STMIK) SYAIKH ZAINUDDIN NAHDLATUL WATHAN</div>
                                        <div style="font-size:18px;font-family:Times New Roman,Times,serif">ANJANI LOMBOK TIMUR-NTB</div>
                                        <div style="font-size:12px;font-family:Times New Roman,Times,serif"><a href="https://stmiksznw.ac.id">www.stmiksznw.ac.id</a></div>
                                    </td>
                                </tr>
                            </table>
                            <hr width="950">
                            <br>
                            <!-- judul -->
                            <h4 align="center"><u>HASIL TES/UJIAN</u></h4>
                            <br>
                            <!-- data mahasiswa -->
                            <table align="center">
                                <tr>
                                    <td width="100" style="font-weight:bold;text-align:left;">No Ujian</td>
                                    <td>:</td>
                                    <td name="no_ujian"><?php echo $row['no_ujian']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100" style="font-weight:bold;text-align:left;">Nama</td>
                                    <td>:</td>
                                    <td name="nama_cmb"><?php echo $row['nama_cmb']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100" style="font-weight:bold;text-align:left;">Tanggal Lahir</td>
                                    <td>:</td>
                                    <td name="tgl_lahir"><?php echo $row['tgl_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100" style="font-weight:bold;text-align:left;">Jenis Kelamin</td>
                                    <td>:</td>
                                    <td name="jk"><?php echo $row['jk']; ?></td>
                                </tr>
                                <tr>
                                    <td width="100" style="font-weight:bold;text-align:left;">Alamat</td>
                                    <td>:</td>
                                    <td name="alamat"><?php echo $row['alamat']; ?></td>
                                </tr>
                                <hr width="950">
                            </table>
                            <br>
                            <!-- nilai -->
                            <h4 align="center"><u>PEROLEHAN NILAI</u></h4>
                            <h1 align="center"><?php echo $terbobot_total[$row['id_cmb']]; ?></h1>
                            <hr width="950">
                            <table align="center">
                                <tr>

                                    <td width="800" style="font-family:Times New Roman,Times,serif;text-align:justify;">
                                        <div>
                                            <p>Dengan Hasil Ujian Yang telah diikuti, dan setelah melakukan pengelohan data menurut hasil tersebut maka <strong><?php echo $row['nama_cmb']; ?></strong> direkomendasikan untuk masuk ke Program Studi <strong>
                                                    <?php
                                                    if ($terbobot_total[$row['id_cmb']] >= 4.0) {
                                                        echo "Teknik Informatika";
                                                    } else {
                                                        echo "Sistem Informasi";
                                                    }
                                                    ?></strong>. Adapaun pilihannya kami serahkan kepada anda sendiri. jika rekomendasi diterima silahkan konfirmasi ke panitia jika tidak silahkan masuk ke Program studi yang sebelumnya sudah dipilih</p>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                            <br>
                            <!-- ttd -->
                            <table align="right">
                                <tr>
                                    <?php $tgl = date('d-m-Y'); ?>
                                    <td>Anjani, <?= $tgl; ?>,</td>
                                </tr>
                                <tr>
                                    <td>Ketua Panitia Penerimaan MABA,</td>
                                </tr>
                            </table>
                            <br><br><br><br><br>
                            <table align="right">
                                <tr>
                                    <td>DEDY EFENDY, S.Ag., S.H., M.Pd </td>
                                </tr>
                                <tr>
                                    <td><u>NUP. 9908004120</u></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

            </section>
            <!-- /.content -->
            <!-- <button class="btn btn-primary mb-1" id="btnPrint"><i class="nav-icon fas fa-print"></i>cetak</button> -->
        </div>
        <!-- /.content-wrapper -->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
            <div style="text-align:center;" class="tc">[<a href="javascript:void()" onclick="print()">CETAK</a>]</div>
        </footer>

        <!-- Control Sidebar -->
    </div>
    </div>

</body>

</html>