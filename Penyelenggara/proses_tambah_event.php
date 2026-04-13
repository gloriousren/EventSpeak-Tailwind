<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "db_eventspeak");

// ambil data
$jenis = $_POST['jenis_event'];
$nama = $_POST['nama_event'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$lokasi = $_POST['lokasi'];
$harga = $_POST['Harga'];
$pemateri = $_POST['Pemateri'];

// upload gambar
$gambar = time() . "_" . $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

$folder = "upload/";

if (!is_dir($folder)) {
    mkdir($folder);
}

move_uploaded_file($tmp, $folder . $gambar);

// insert ke database
$query = "INSERT INTO Penyelenggara 
(jenis_event, nama_event, deskripsi, tanggal, lokasi, pemateri, gambar) 
VALUES 
('$jenis', '$nama', '$deskripsi', '$tanggal', '$lokasi', '$pemateri', '$gambar')";

mysqli_query($conn, $query);

// balik ke dashboard
header("Location: dashboard.php");
?>