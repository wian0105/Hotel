<?php

include 'Layout/header_admin.php';

// check btn tambah
if (isset($_POST['tambah'])) {
    if (create_kamar($_POST) > 0) {
        echo "<script>alert('data barang berhasil ditambahkan');
        document.location.href = 'admin.php'; </script>";
    } else {
        echo "<script>alert('data barang gagal ditambahkan');
        document.location.href = 'tambah_kamar.php'; </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Tambah Kamar</h1>
    <hr>
    <form action="" method="post">

  <div class="mb-3">
    <label for="nama" class="form-label">Nomor Kamar</label>
    <input type="text" class="form-control" id="no_kamar" name="no_kamar" required>
  </div>
  <select class="form-select" aria-label="Default select example" name="jenis" id="jenis">
    <option selected>Jenis Kamar</option>
    <option value="Supperior">Supperior</option>
    <option value="Deluxe">Deluxe</option>
  </select>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah Kamar</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" required>  
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Kamar</label>
    <input type="number" class="form-control" id="harga" name="harga" required>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary" style="float: right;">Tambah</button>
</form>
</div>

<?php
include 'Layout/footer_admin.php'
?>