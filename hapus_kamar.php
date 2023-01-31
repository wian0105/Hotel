<?php

// mengambil id kamar

$id_kamar = (int)$_GET['id_kamar'];

include 'config/app.php';

if (hapus_kamar($id_kamar) > 0) {
    echo "<script>alert('data barang berhasil dihapus');
        document.location.href = 'admin.php'; </script>";
} else {
    echo "<script>alert('data barang gagal dihapus');
        document.location.href = 'admin.php'; </script>";
}
