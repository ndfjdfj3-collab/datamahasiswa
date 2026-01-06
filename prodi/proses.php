<?php
require 'koneksi.php';

// INSERT
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO prodi(id, nama_prodi, jenjang, keterangan) VALUES('$id', '$nama_prodi', '$jenjang', '$keterangan')";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php?page=prodi");
        exit;
    } else {
        echo "Maaf, data gagal disimpan!";
        echo $koneksi->error;
    }
}

// DELETE
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM prodi WHERE id='$id'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php?page=prodi");
        exit;
    } else {
        echo "Maaf, data gagal dihapus!";
    }
}


//UPDATE
if (isset($_POST['ubah'])) {
    $id_baru = $_POST['id'];
    $id_lama = $_POST['id_lama'];
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE prodi SET 
                id='$id_baru',
                nama_prodi='$nama_prodi',
                jenjang='$jenjang',
                keterangan='$keterangan'
              WHERE id='$id_lama'";

    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php?page=prodi");
        exit;
    } else {
        echo "Maaf, data gagal diubah!!";
    }
}
?>