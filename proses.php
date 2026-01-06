<?php
//Include file koneksi
require 'koneksi.php';

//INSERT DATA MAHASISWA
if (isset($_POST['mhs_submit'])) {
    $nim        = $_POST['nim'];
    $nama_mhs   = $_POST['nama_mhs'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];
    $prodi_id = $_POST['prodi_id'];

    $query = "INSERT INTO mahasiswa (nim, nama_mhs, tgl_lahir, prodi_id, alamat)
          VALUES ('$nim', '$nama_mhs', '$tgl_lahir', '$prodi_id', '$alamat')";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?page=mahasiswa");
        exit();
    } else {
        echo "Gagal menyimpan data mahasiswa!";
    }
}
//UPDATE DATA MAHASISWA
elseif (isset($_POST['mhs_update'])) {
    $nim        = $_POST['nim']; //PRIMARY KEY
    $nama_mhs   = $_POST['nama_mhs'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];
    $prodi_id = $_POST['prodi_id'];

    $query = "UPDATE mahasiswa 
              SET nama_mhs='$nama_mhs',
                  tgl_lahir='$tgl_lahir',
                  prodi_id= '$prodi_id',
                  alamat='$alamat'
              WHERE nim='$nim'";

    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?page=mahasiswa");
        exit();
    } else {
        echo "Gagal mengupdate data mahasiswa!";
    }
}

//DELETE DATA MAHASISWA
elseif (isset($_GET['mhs_delete'])) {
    $nim = $_GET['mhs_delete'];

    $query = "DELETE FROM mahasiswa WHERE nim='$nim'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?page=mahasiswa");
        exit();
    } else {
        echo "Gagal menghapus data mahasiswa!";
    }
}

//INSERT DATA PRODI
elseif (isset($_POST['prodi_submit'])) {
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang    = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO prodi (nama_prodi, jenjang, keterangan)
              VALUES ('$nama_prodi', '$jenjang', '$keterangan')";

    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?page=prodi");
        exit();
    } else {
        echo "Gagal menyimpan data prodi!";
    }
}
//UPDATE DATA PRODI
elseif (isset($_POST['prodi_update'])) {
    $id         = $_POST['id']; // PRIMARY KEY
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang    = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE prodi 
              SET nama_prodi='$nama_prodi',
                  jenjang='$jenjang',
                  keterangan='$keterangan'
              WHERE id='$id'";

    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?page=prodi");
        exit();
    } else {
        echo "Gagal mengupdate data prodi!";
    }
}
//DELETE DATA PRODI
elseif (isset($_GET['prodi_delete'])) {
    $id = $_GET['prodi_delete'];

    $query = "DELETE FROM prodi WHERE id='$id'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location: index.php?page=prodi");
        exit();
    } else {
        echo "Gagal menghapus data prodi!";
    }
}
?>