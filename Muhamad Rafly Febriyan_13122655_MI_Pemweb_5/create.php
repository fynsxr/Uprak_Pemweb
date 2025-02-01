<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    $sql = "INSERT INTO tb_pegawai (nama, jabatan, email) VALUES ('$nama', '$jabatan', '$email')";
    if ($conn->query($sql)) {
        header("location : read.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Data Pegawai</title>
</head>
<body>
    <h1>Tambahkan Data Pegawai</h1>
    <form method="POST">
        <label>Nama :</label><br>
        <input type="text" name="nama" required><br><br>
        <label>Jabatan :</label><br>
        <input type="text" name="jabatan" required><br><br>
        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit" name="submit">Add</button>
    </form>
</body>
</html>