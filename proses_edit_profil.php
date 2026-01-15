<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
$email = $_SESSION['email'];

if (isset($_POST['nama_lengkap'])) {
    $nama_lengkap = trim($_POST['nama_lengkap']);
    $password_baru = trim($_POST['password']);

    if ($nama_lengkap == '') {
        echo "<script>
            alert('Nama tidak boleh kosong');
            history.back();
        </script>";
        exit;
    }
    if ($password_baru != '') {
        $password_hash = md5($password_baru);

        $query = "UPDATE pengguna 
                  SET nama_lengkap='$nama_lengkap', password='$password_hash'
                  WHERE email='$email'";
    } 
    else {
        $query = "UPDATE pengguna 
                  SET nama_lengkap='$nama_lengkap'
                  WHERE email='$email'";
    }

    if (mysqli_query($koneksi, $query)) {
         session_destroy();

        echo "<script>
            alert('Profil berhasil diedit. Silakan login kembali.');
            window.location='login.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal diedit profil');
            history.back();
        </script>";
    }
}
?>
