<?php
include 'connection.php';

$nip = $_GET['nip'];
$sql = "DELETE FROM tb_pegawai WHERE nip=$nip";
if ($conn->query($sql)) {
    header("Location: read.php");
} else {
    echo "Error: " . $conn->error;
}
?>