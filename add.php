<?php
include 'config/database.php';
include 'layout/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $satuan_barang = $_POST['satuan_barang'];

    $sql = "INSERT INTO barang (kode_barang, nama_barang, jumlah_barang, satuan_barang)
            VALUES ('$kode_barang', '$nama_barang', $jumlah_barang, '$satuan_barang')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<h2>Tambah Barang</h2>
<form method="POST" action="">
    <div class="form-group">
        <label for="kode_barang">Kode Barang</label>
        <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
    </div>
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
    </div>
    <div class="form-group">
        <label for="jumlah_barang">Jumlah Barang</label>
        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
    </div>
    <div class="form-group">
        <label for="satuan_barang">Satuan Barang</label>
        <select class="form-control" id="satuan_barang" name="satuan_barang" required>
            <option value="kg">Kg</option>
            <option value="pcs">Pcs</option>
            <option value="liter">Liter</option>
            <option value="meter">Meter</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include 'layout/footer.php';
?>