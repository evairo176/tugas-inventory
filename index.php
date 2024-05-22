<?php
include 'config/database.php';
include 'layout/header.php';


?>

<div class="container">
    <h2 class="mt-4">Inventory Barang</h2>
    <div class="mb-4">
        <a href="add_item.php" class="btn btn-primary">Tambah Barang</a>
    </div>
    <table id="tabel-data" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>id barang</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Satuan Barang</th>
                <th>Harga Beli</th>
                <th>Status Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM barang order BY id_barang DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['id_barang']}</td>
                            <td>{$row['kode_barang']}</td>
                            <td>{$row['nama_barang']}</td>
                            <td>{$row['jumlah_barang']}</td>
                            <td>{$row['satuan_barang']}</td>
                            <td>{$row['harga_beli']}</td>
                            <td>" . ($row['status_barang'] ? 'Available' : 'Not Available') . "</td>
                            <td>
                                <div style='display:flex;gap:5px;'>
                                    <a href='update_item.php?id={$row['id_barang']}' class='btn btn-warning'><i class='fa-solid fa-pencil'></i></a>
                                    <a href='delete_item.php?id={$row['id_barang']}' class='btn btn-danger'><i class='fa-solid fa-trash'></i></a>
                                    <a href='use_item.php?id={$row['id_barang']}' class='btn btn-info'><i class='fa-solid fa-utensils'></i></a>
                                    <a href='increase_item.php?id={$row['id_barang']}' class='btn btn-success'><i class='fa-solid fa-plus'></i></a>
                                </div>
                            </td>
                        </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='9'>Tidak ada data</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<?php
include 'layout/footer.php';
?>