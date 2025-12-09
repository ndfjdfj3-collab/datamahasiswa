<h1>Input Data Mahasiswa</h1>
<form action="proses.php" method="post">
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim">
    </div>
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs">
    </div>
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
    </div>
    <div>
        <input type="submit" name="submit" class="btn btn-primary">
        <a href="index.php?page=datamahasiswa" class="btn btn-secondary">Lihat Data Mahasiswa</a>
    </div>
</form>
