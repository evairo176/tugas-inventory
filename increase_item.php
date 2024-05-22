<?php
include 'config/database.php';

if (isset($_GET['id'])) {
    $id_barang = $_GET['id'];

    $sql = "SELECT jumlah_barang FROM barang WHERE id_barang = $id_barang";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $new_jumlah = $row['jumlah_barang'] + 1;
    $sql = "UPDATE barang SET jumlah_barang = $new_jumlah WHERE id_barang = $id_barang";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Jumlah barang berhasil ditambah');window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
