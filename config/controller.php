<!-- fuungsi action untuk menampilkan, mengubah, mengedit dan menghapus data dari database -->
<?php
// fungsi untuk menampilkan data
function select($query)
{
    // memanggil koneksi database
    global $konek;
    // memasukkan query dan database yang akan digunakan
    $result = mysqli_query($konek, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// FUNCTION UNTUK MABA
// tambah data maba
function create_maba($post)
{
    global $konek;

    $no_ujian = $post['no_ujian'];
    $nama_cmb = $post['nama_cmb'];
    $tgl_lahir = $post['tgl_lahir'];
    $jk = $post['jk'];
    $alamat = $post['alamat'];
    $jurusan = $post['jurusan'];

    // query tambah data
    $query = "INSERT INTO cmb VALUES(null, '$no_ujian', '$nama_cmb', '$tgl_lahir', '$jk', '$alamat', '$jurusan')";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}
// ubah data maba
function ubah_maba($post)
{
    global $konek;

    $id_cmb = $post['id_cmb'];
    $no_ujian = $post['no_ujian'];
    $nama_cmb = $post['nama_cmb'];
    $tgl_lahir = $post['tgl_lahir'];
    $jk = $post['jk'];
    $alamat = $post['alamat'];
    $jurusan = $post['jurusan'];

    // query ubah data
    $query = "UPDATE cmb set no_ujian='$no_ujian', nama_cmb='$nama_cmb', tgl_lahir='$tgl_lahir', jk='$jk', alamat='$alamat', id_jurusan='$jurusan' WHERE id_cmb=$id_cmb";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}
// hapus data maba
function hapus_maba($id_cmb)
{
    global $konek;

    // query hapus data barang
    $query = "DELETE FROM cmb WHERE id_cmb = $id_cmb";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// FUNCTION UNTUK TARGET
// ubah
function ubah_target($post)
{
    global $konek;

    $id_target = $post['id_target'];
    $prodi = $post['prodi'];
    $persentase = $post['persentase'];
    $cf = $post['cf'];
    $sf = $post['sf'];

    // query ubah/update data
    $query = "UPDATE aspek SET prodi = '$prodi', persentase = '$persentase', cf = '$cf', sf = '$sf' WHERE id_target = '$id_target'";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// FUNCTION BOBOT KRITERIA JURUSAN
// tambah
function create_jurusan($post)
{
    global $konek;

    $jurusan = $post['jurusan'];
    $bobot_j = $post['bobot_j'];

    // query tambah data
    $query = "INSERT INTO bobot_jurusan VALUES(null, '$jurusan', '$bobot_j')";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// ubah
function ubah_jurusan($post)
{
    global $konek;

    $id_jurusan = $post['id_jurusan'];
    $jurusan = $post['jurusan'];
    $bobot_j = $post['bobot_j'];

    // query ubah/update data
    $query = "UPDATE bobot_jurusan SET jurusan = '$jurusan', bobot_j = '$bobot_j' WHERE id_jurusan = $id_jurusan";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// hapus
function hapus_jurusan($id_jurusan)
{
    global $konek;

    // query hapus data barang
    $query = "DELETE FROM bobot_jurusan WHERE id_jurusan = $id_jurusan";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// FUNCTION BOBOT KRITERIA JURUSAN
// hapus
function hapus_nu($id_nu)
{
    global $konek;

    // query hapus data barang
    $query = "DELETE FROM bobot_nilai WHERE id_nu = $id_nu";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// FUNCTION KRITERIA
// tambah
function create_kriteria($post)
{
    global $konek;

    $prodi = $post['prodi'];
    $kriteria = $post['kriteria'];
    $target = $post['target'];
    $tipe = $post['tipe'];

    // query tambah data
    $query = "INSERT INTO kriteria VALUES(null, '$prodi', '$kriteria', '$target', '$tipe')";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// hapus
function hapus_kriteria($id_kriteria)
{
    global $konek;

    // query hapus data barang
    $query = "DELETE FROM kriteria WHERE id_kriteria = $id_kriteria";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// FUNCTION UNTUK sempel
// tambah data sempel
function create_sempel($post)
{
    global $konek;

    $nama_cmb = $post['nama_cmb'];
    $kriteria = $post['kriteria'];
    $value = $post['value'];

    // query tambah data
    $query = "INSERT INTO sempel VALUES(null, '$nama_cmb', '$kriteria', '$value')";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}
?>