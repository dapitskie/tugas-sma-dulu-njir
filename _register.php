<?php
require '_koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO register (username, email, password) 
            VALUES ('$username', '$email', '$password')";

if (mysqli_query($koneksi, $query_sql)) {
    header("Location: login.html?status=registered");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
