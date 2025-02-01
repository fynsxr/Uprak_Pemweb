<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "administrasi";

// deklarasikan variabel database
$conn = new mysqli($host, $user, $password, $db);

// mengecek konektivitas database
if ($conn -> connect_error) {
    die("Koneksi Gagal: " . $conn -> connect_error);
}
?>