<?php
include 'connection.php';

$sql = "SELECT * FROM tb_pegawai";
$result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi | Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <button 
    onclick="window.location.href='create.php'" 
    style="
        padding: 10px 20px; 
        background-color: #007bff; 
        color: white; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer;
        transition: background-color 0.3s ease;
    "
    onmouseover="this.style.backgroundColor='#0056b3'" 
    onmouseout="this.style.backgroundColor='#007bff'"
>
    Add Data
</button><br><br>
    <table border="1">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['nip'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jabatan'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>