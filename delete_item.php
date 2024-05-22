<?php
include 'config/database.php';


if (isset($_GET['id'])) {
    $id_barang = $_GET['id'];

    $sql = "DELETE FROM barang WHERE id_barang = $id_barang";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus');window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
