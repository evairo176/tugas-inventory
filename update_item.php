<?php
include 'config/database.php';
include 'layout/header.php';

if (isset($_GET['id'])) {
    $id_barang = $_GET['id'];

    $sql = "SELECT * FROM barang WHERE id_barang = $id_barang";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<<div class="container">
    <h2 class="mt-4">Update Barang</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $row['kode_barang']; ?>" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required>
        </div>
        <div class="form-group">
            <label for="jumlah_barang">Jumlah Barang:</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?php echo $row['jumlah_barang']; ?>" required>
        </div>
        <div class="form-group">
            <label for="satuan_barang">Satuan Barang:</label>
            <select class="form-control" id="satuan_barang" name="satuan_barang">
                <option value="kg" <?php if ($row['satuan_barang'] == 'kg') echo 'selected'; ?>>kg</option>
                <option value="pcs" <?php if ($row['satuan_barang'] == 'pcs') echo 'selected'; ?>>pcs</option>
                <option value="liter" <?php if ($row['satuan_barang'] == 'liter') echo 'selected'; ?>>liter</option>
                <option value="meter" <?php if ($row['satuan_barang'] == 'meter') echo 'selected'; ?>>meter</option>
            </select>
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Beli:</label>
            <input type="number" step="0.01" class="form-control" id="harga_beli" name="harga_beli" value="<?php echo $row['harga_beli']; ?>" required>
        </div>
        <div class="form-group">
            <label for="status_barang">Status Barang:</label>
            <select class="form-control" id="status_barang" name="status_barang">
                <option value="1" <?php if ($row['status_barang'] == 1) echo 'selected'; ?>>Available</option>
                <option value="0" <?php if ($row['status_barang'] == 0) echo 'selected'; ?>>Not Available</option>
            </select>
        </div>
        <button type="submit" name="update" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $satuan_barang = $_POST['satuan_barang'];
        $harga_beli = $_POST['harga_beli'];
        $status_barang = $_POST['status_barang'];

        $sql = "UPDATE barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', jumlah_barang='$jumlah_barang', satuan_barang='$satuan_barang', harga_beli='$harga_beli', status_barang='$status_barang' WHERE id_barang=$id_barang";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success mt-4'>Data berhasil diupdate</div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    </div>

    <?php
    include 'layout/footer.php';
    ?>