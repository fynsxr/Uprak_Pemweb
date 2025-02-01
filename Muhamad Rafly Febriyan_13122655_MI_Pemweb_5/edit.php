<?php
include 'connection.php';

$nip = intval($_GET['nip']);
$sql = "SELECT*FROM tb_pegawai WHERE nip=$nip";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    $sql = "UPDATE tb_pegawai SET nama='$nama', jabatan='$jabatan', email='$email' WHERE nip=$nip";
    if ($conn->query($sql)) {
        header("Location: read.php");
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
    <title>Ubah Data Pegawai</title>
</head>
<body>
<h1>Edit Data Pegawai</h1>
    <form method="POST">
        <label>Nama :</label><br>
        <input type="text" name="nama" value="<?= $tb_pegawai['nama'] ?>" required><br>
        <label>Jabatan :</label><br>
        <input type="text" name="jabatan" value="<?= $tb_pegawai['jabatan'] ?>" required><br>
        <label>Email :</label><br>
        <input type="email" name="email" value="<?= $tb_pegawai['email'] ?>" required><br><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>