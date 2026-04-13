<?php
$conn = mysqli_connect("127.0.0.1:3306", "root", "", "eventspeak");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>