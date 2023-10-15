<?php
$db = new mysqli('localhost', 'root', '', 'crud-php');

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO barang (nama, jumlah, harga) VALUES ('$nama', $jumlah, $harga)";
    $db->query($query);

    header("Location: index.php");
}

$db->close();
?>
