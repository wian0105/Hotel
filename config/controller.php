<?php
function select($query)
{
  // panggil koneksi database
  global $db;

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function create_kamar($post)
{
    global $db;

    $id_kamar = $post['id_kamar'];
    $jenis = $post['jenis'];
    $jumlah = $post['jumlah'];
    $harga = $post['harga'];

    // query create
    $query = "INSERT INTO data_kamar VALUES('$id_kamar','$jenis', '$jumlah', '$harga')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function update_kamar($post)
{
    global $db;
    
    $id_kamar = $post['id_kamar'];
    $jenis = $post['jenis'];
    $jumlah = $post['jumlah'];
    $harga = $post['harga'];

    $query = "UPDATE data_kamar SET jenis_kamar = '$jenis', jumlah_kamar = '$jumlah', harga_kamar = '$harga' WHERE id_kamar = '$id_kamar'";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus_kamar($id_kamar)
{
  global $db;

  $query = "DELETE FROM data_kamar WHERE id_kamar = '$id_kamar'";

  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}