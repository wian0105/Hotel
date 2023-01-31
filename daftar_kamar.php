<?php
include 'Layout/header_admin.php'
?>

<div class="container mt-5 ">
  <h1>Data Barang</h1>
  <a href="form_tambah.php" class="btn btn-primary mb-1">Tambah</a>
  <table class="table table-striped mt-3">
  <thead>
    <tr>
      <th>No Kamar</th>
      <th>Jenis Kamar</th>
      <th>Jumlah Kamar</th>
      <th>Harga Kamar</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $no = 1;?>
    <?php foreach ($data_barang as $barang) :  ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $barang['nama']; ?> </td>
      <td><?= $barang['jumlah']; ?></td>
      <td>Rp. <?= number_format($barang['harga'],0,',','.'); ?></td>
      <td><?= date('d-m-Y | H:i', strtotime($barang['tanggal'])); ?></td>
      <td width="15%" class="text-center">
        <a href="ubah_barang.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-success">Ubah</a>
        <a href="" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div> 

<?php
include 'Layout/footer_admin.php'
?>