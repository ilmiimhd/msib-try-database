<?php
$db = new mysqli('localhost', 'root', '', 'crud-php');

if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    $query = "UPDATE barang SET nama = '$nama', jumlah = $jumlah, harga = $harga WHERE id = $id";
    $db->query($query);

    header("Location: index.php");
}

$db->close();
?>