<h2>List Data Mahasiswa</h2>
<a href ='index.php?page=create' class= 'btn btn-primary'>Input Data Mahasiswa</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
    require 'koneksi.php';
    $tampil = $koneksi->query("select * from mahasiswa");
    $no=1;
    //looping data mahasiswa
    // -> ini adalah tanda objek
    while($data = $tampil->fetch_assoc()){
    ?>
        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama_mhs'] ?></td>
            <td><?= $data['tgl_lahir'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td>  
              <a href="proses.php?nim=<?=$data['nim']?>" class= "btn btn-danger btn-sm">Hapus</a>
              <a href="index.php?nim=<?=$data['nim']?>&page=edit" class= "btn btn-info btn-sm">Edit</a>
            </td>
        </tr>
    <?php $no++; } ?>
  </tbody>
</table>
