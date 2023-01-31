<?php
include 'Layout/header_admin.php';

$id_kamar = (int)$_GET['id_kamar'];

$kamar = select("SELECT * FROM data_kamar WHERE id_kamar = '$id_kamar'")[0];

// check btn tambah
if (isset($_POST['ubah'])) {
    if (update_kamar($_POST) > 0) {
        echo "<script>alert('data barang berhasil diubah');
        document.location.href = 'admin.php'; </script>";
    } else {
        echo "<script>alert('data barang gagal diubah');
        document.location.href = 'ubah_kamar.php'; </script>";
    }
}
?>

<div class="container mt-5">
    <h1>Ubah Kamar</h1>
    <hr>
    <form action="" method="post">

  <select class="form-select" aria-label="Default select example" name="jenis" id="jenis" >
    <option selected><?= $kamar['jenis_kamar']; ?></option>
    <option value="Supperior">Supperior</option>
    <option value="Deluxe">Deluxe</option>
  </select>
  <div class="mb-3">
    <label for="jumlah" class="form-label">Jumlah Kamar</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $kamar['jumlah_kamar']?>">  
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Kamar</label>
    <input type="number" class="form-control" id="harga" name="harga" value="<?= $kamar['harga_kamar']?>" >
  </div>
  <button type="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
</form>
</div>

<?php
include 'Layout/footer_admin.php'
?>