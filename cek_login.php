<?php

include 'config/database.php';

$username =  $_POST['username'];
$password =  $_POST['password'];

$sql = "SELECT * FROM hotel_login WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db, $sql);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['level'] == 1) {
        header("Location: admin.php");
    } elseif ($row['level'] == 2) {
        header("Location: index.html");
    } else {
        echo "<script>alert('anda tidak memiliki hak akses')</script>";
        header("Location: login.php");
    }
} else {
    echo "<script>alert('Email atau password anda salah, coba lagi')</script>";
        header("Location: login.php");
}

?>