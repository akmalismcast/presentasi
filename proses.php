<?php
// Menghubungkan file proses dengan koneksi
include 'koneksi.php';

// Menangkap data nilai dari form inputan yang terdapat
// di input.php
$txtnama = $_POST['txtnama'];
$txtalamat = $_POST['txtalamat'];
$txtemail = $_POST['txtemail'];
$txtkota = $_POST['txtkota'];
$txtpesan = $_POST['txtpesan'];

// Melakukan insert data ke database
mysqli_query($koneksi, "INSERT INTO table_wed VALUES('', '$txtnama', '$txtalamat', '$txtemail', '$txtkota', '$txtpesan')");

// Mengalihkan halaman kembali ke web utama
header("location:output.php");
?>
