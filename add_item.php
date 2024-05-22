<?php
include 'config/database.php';
include 'layout/header.php';

?>
<div class="container">
    <h2 class="mt-4">Tambah Barang</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label for="jumlah_barang">Jumlah Barang:</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
        </div>
        <div class="form-group">
            <label for="satuan_barang">Satuan Barang:</label>
            <select class="form-control" id="satuan_barang" name="satuan_barang">
                <option value="kg">kg</option>
                <option value="pcs">pcs</option>
                <option value="liter">liter</option>
                <option value="meter">meter</option>
            </select>
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Beli:</label>
            <input type="number" step="0.01" class="form-control" id="harga_beli" name="harga_beli" required>
        </div>
        <div class="form-group">
            <label for="status_barang">Status Barang:</label>
            <select class="form-control" id="status_barang" name="status_barang">
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $satuan_barang = $_POST['satuan_barang'];
        $harga_beli = $_POST['harga_beli'];
        $status_barang = $_POST['status_barang'];

        $sql = "INSERT INTO barang (kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang)
                VALUES ('$kode_barang', '$nama_barang', '$jumlah_barang', '$satuan_barang', '$harga_beli', '$status_barang')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-4'>Data berhasil ditambahkan</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</div>