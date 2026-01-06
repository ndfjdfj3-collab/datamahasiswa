<h1>Input Prodi Mahasiswa</h1>
<form action="/pemograman_web/akademik/proses.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Id Prodi</label>
        <input type="text" class="form-control" name="id" required>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" name="nama_prodi" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Jenjang</label>
        <select name="jenjang" class="form-control" required>
            <option value="">-- Pilih Jenjang --</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="S2">S2</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Keterangan</label>
        <textarea class="form-control" name="keterangan" rows="3"></textarea>
    </div>

    <div>
        <input type="submit" name="prodi_submit" class="btn btn-success" value="Simpan Data">
        <a href="index.php?page=prodi" class="btn btn-primary">Lihat Data Prodi</a>
    </div>

</form>